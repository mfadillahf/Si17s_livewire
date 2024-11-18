<?php

namespace App\Livewire\ServerVisitors;

use Livewire\Component;
use App\Models\ServerVisitorReport as ModelsVisitorReport;
use App\Models\Visitor;
use App\Models\Institute;
use Illuminate\Support\Facades\Http;

class KunjunganCreate extends Component
{
    public $title = 'Daftar Kunjungan Create';
    public $searchQuery;
    public $searchResults = [];
    public $selectedData = [];
    public $entered_at;
    public $description;
    // public $savedData = [];

    public function mount()
    {
    $this->entered_at = now()->format('Y-m-d\TH:i');
    }

    public function uniqueByEmail($array, $key)
    {
        $tempArray = [];
        $uniqueArray = [];
    
        foreach ($array as $item) {
            if (!in_array($item[$key], $tempArray)) {
                $tempArray[] = $item[$key];
                $uniqueArray[] = $item;
            }
        }
    
        return $uniqueArray;
    }

    public function searchTamu()
    {
        if ($this->searchQuery) {
            $response = Http::withHeaders([
                'Accept-Encoding' => 'gzip, deflate, br',
                'Connection' => 'keep-alive',
                'Accept' => '/',
                'Authorization' => 'Bearer ' . ENV('TOKEN_API_ETAMU'),
            ])
            ->timeout(500)
            ->retry(10, 100)
            ->get('https://e-tamu.lpse.kalselprov.go.id/api/cari-tamu', [
                'params' => $this->searchQuery
            ]);

            if ($response->successful() && $response->json('status') === true) {
                $this->searchResults = $this->uniqueByEmail($response->json('data'), 'email');
            } else {
                $this->searchResults = [];
            }
        }
    }

    // masuk ke tabel sementara
    public function saveToVisitor($data)
    {
        if (isset($this->searchResults[$data])) {
            $item = $this->searchResults[$data];

            // Tambahkan ke selectedData, bukan langsung ke database
            $this->selectedData[] = $item;

            // Hapus dari searchResults
            unset($this->searchResults[$data]);
            $this->searchResults = array_values($this->searchResults); // Reindex array
        }
        $this->dispatch('swal:success');
    }


    // insert to database
    public function saveToReport()
    {
    foreach ($this->selectedData as $item) {
        $ins = Institute::firstOrCreate(
            ['name' => $item['instansi']],
            ['name' => $item['instansi']]
        );

        Visitor::create([
            'name' => $item['nama'],
            'email' => $item['email'],
            'identity_number' => $item['nik'],
            'address' => $item['alamat'],
            'phone_number' => $item['hp'],
            'institute_id' => $ins->id,
        ]);

        ModelsVisitorReport::create([
            'status' => 'Masih Berkunjung',
            'entered_at' => $this->entered_at,
            'description' => $this->description,
            'institute_id' => $ins->id,
        ]);
    }

    // Reset data setelah penyimpanan
    $this->selectedData = [];
    $this->entered_at = null;
    $this->description = null;

    $this->dispatch('swal:success');
    return redirect()->route('kunjungan');
    }

    // fungsi hapus pada tabel sementara
    public function removeFromSelectedData($index)
    {
    if (isset($this->selectedData[$index])) {
        // Ambil data dari selectedData
        $item = $this->selectedData[$index];

        // Tambahkan kembali ke searchResults
        $this->searchResults[] = $item;

        // Hapus data dari selectedData
        unset($this->selectedData[$index]);

        // Perbarui array dengan reindexing
        $this->selectedData = array_values($this->selectedData);
        $this->dispatch('swal:delete');
    }
    }

    public function render()
    {
        return view('livewire.server-visitors.kunjungan-create', [
 
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
