<?php
function get_main_table($data){
    return '<table class="table table-bordered" cellspacing="0" width="100%" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th class="w-auto p-1">S.No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="w-auto p-1"><input type="checkbox" class="btn-check" name="edit_id" id="1" autocomplete="off"></td>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td class="w-auto p-1"><input type="checkbox" class="btn-check" name="edit_id" id="2" autocomplete="off"></td>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr>
        
    </tbody>
</table>';
}
?>