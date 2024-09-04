/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Datatables Js
 */
import { DataTable } from "simple-datatables";
import 'simple-datatables/dist/umd/simple-datatables'

try{
 new DataTable("#datatable_1", {
    searchable: true,
    fixedHeight: false,
  })
} catch (err) {}
try{
  const dataTable_2 = new DataTable("#datatable_2")
  document.querySelector("button.csv").addEventListener("click", () => {
      exportCSV(dataTable_2, {
          download: true,
          lineDelimiter: "\n\n",
          columnDelimiter: ";"
      });
  })
  document.querySelector("button.sql").addEventListener("click", () => {
      exportSQL(dataTable_2, {
          download: true,
          tableName: "export_table"
      })
  })
  document.querySelector("button.txt").addEventListener("click", () => {
      exportTXT(dataTable_2, {
          download: true,
      })
  })
  document.querySelector("button.json").addEventListener("click", () => {
      exportJSON(dataTable_2, {
          download: true,
          escapeHTML: true,
          space: 3
      })
  })
} catch (err) {}

try{
    document.addEventListener('DOMContentLoaded', function() {
        var checkedAll = document.querySelector("[name='select-all']"),
          checkedItems = document.querySelectorAll("[name='check']");

          checkedAll?.addEventListener('change', function() {
            var isChecked = checkedAll.checked;
            checkedItems.forEach(function(item) {
              item.checked = isChecked;
            });
          });

          checkedItems.forEach(function(item) {
            item.addEventListener('click', function() {
              var inputs = checkedItems.length;
              var inputsChecked = document.querySelectorAll("[name='check']:checked").length;

              if (inputsChecked <= 0) {
                checkedAll.checked = false;
                checkedAll.indeterminate = false;
              } else if (inputs === inputsChecked) {
                checkedAll.checked = true;
                checkedAll.indeterminate = false;
              } else {
                checkedAll.checked = true;
                checkedAll.indeterminate = true;
              }
            });
          });
        });
} catch (err) {}
