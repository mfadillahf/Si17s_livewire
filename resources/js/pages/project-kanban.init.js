/**
 * Theme: Rizz - Bootstrap 5 Responsive Admin Dashboard
 * Author: Mannatthemes
 * Project Kanban Js
 */


 
// dragula([document.getElementById("dragula-left"), 
// document.getElementById("dragula-right")]);
import dragula from "dragula";

dragula([
    document.getElementById("project-list-left"),
    document.getElementById("project-list-center-left"),
    document.getElementById("project-list-center-right"), 
    document.getElementById("project-list-right")
]);

