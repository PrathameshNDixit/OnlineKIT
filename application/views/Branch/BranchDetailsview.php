
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="Assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap3.min.css">

<style>



.dform-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    top: -25px;
    left: 24px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}
.fform-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 600;
    top: -30px;
    left: 24px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}
.form-group label{
    position: absolute;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #1273eb;
    background: #ffffff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 400;
    top: -25px;
    left: 7px;
    padding: -1px 7px;
    z-index: 10;
    text-align: left;
}



c{
    color:red;
    font-size:14px;
    font-weight:500;
}

.bord{

    border:2px solid grey;
    border-radius: 10px;
    padding: 7px;
}
.bords{

border:2px solid grey;
border-radius: 10px;
}
.heads{
    margin-left:22px;
    margin-top:-15px;
    background:white;
    width: 204px;
    color:#0161b5;
    font-weight:800;
    padding-left:5px;
}

.head{
    margin-left:22px;
   font-size:25px;
   margin-top:-25px;
    background:white;
    width: 110px;
    color:#0161b5;
    font-weight:800;
    padding-left:5px;
   
}


.dt{
    margin-top:-40px;
    margin-bottom:-10px;
}

/* Button css */
.btn-md{
    font-size:17px;
}

.btn-edit{
    background: #FFBF00 ;
    background-size: 100% 100%;
    background-position: right bottom;
    transition: all .4s ease-out;
    border: none;
    margin-top:20px;
}
.btn-save{
    background: linear-gradient(to right, #067e5c 50%, #1273eb 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .4s ease-out;
    border: none;
    margin-top:20px;
    margin:0 auto;
} 

.btnright:not(:disabled):not(.disabled) {
    margin-right: -12px;
}
 .text-right {
    text-align: right !important;
} 
.header{
    margin-left:22px;
   font-size:15px;
   margin-top:2px;
    width: 50px;
    color:#0161b5;
    font-weight:800;
    
}
.special {
  font-weight: bold !important;
  color: #fff !important;
  background: #bc0000 !important;
  text-transform: uppercase;
}



.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #eee;
  border-radius: 0.25rem;
 }
 .breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: 7px 0 1.25rem;

 }
.breadcrumb img{
  margin-top: -70px;
  margin-bottom: -45px;
  
}

  .breadcrumb h4 {
    margin-left:2px;
    margin-top: -20px;
    position: absolute;
    color: var(--white);
    text-align:center;
    font-family: Frozen;
    font-weight: 600;
    font-size: 1.4rem;
    line-height: 1;
     }

  



    </style>

<style>
  .modal-dialog {
    max-width: 1450px;
    margin: 2rem auto;
}

.fa-file-excel:before {
    content: "\f1c1";
    color: #1d6f42;
    font-size:18px;
}
.fa-file-pdf:before {
    content: "\f1c1";
    color: #f40f02;
    font-size:18px;
}
.fa-file-csv:before {
    content: "\f6dd";
    color:teal;
    font-size:18px;
}
.fa-copy:before, .fa-files-o:before {
    content: "\f0c5";
    color:rgba(86, 141, 229, 1);
    font-size:18px;
}.fa-print:before {
    content: "\f02f";
    color: black;
    font-size:19px;
}
.animtxt:hover{
  transform: scale(1.2);
}
.animimg:hover{
  transform: scale(1.05);
}

.buttons-excel {
  border:none;
  background-color: #ffffff;
  /* background-color:green; */
  color:#black;
  margin:0 auto;
  /* border:1px solid white; */
}
.buttons-copy {
 border:none;
 /* background-color:#BBDEF9; */
 background-color: #ffffff;
  color:white;
  margin:0 5;
  margin-left:25px;
  /* border:1px solid white; */
}
.buttons-pdf {
  background-color: #ffffff;
  border:none;
  /* background-color:#f40f02; */
  color:white;
  margin:0 auto;
  /* border:1px solid white; */
}
.buttons-csv {
  background-color: #ffffff;
  /* background-color: #445AD3; */
  border:none;
  color:white;
  /* border:1px solid white; */
  margin:0 5;
}
.buttons-excel {
  background-color: #ffffff;
  border:none;
  /* background-color: #1d6f42 ; */
  color:white;
  margin:0 5;
  /* border:1px solid white; */
}
.buttons-print {
  background-color: #ffffff;
  border:none;
  /* background-color:#36454F; */
  color:white;
  margin:0 5;
  /* border:1px solid white; */
}

.table.dataTable.display>tbody>tr.odd>.sorting_1, table.dataTable.order-column.stripe>tbody>tr.odd>.sorting_1 {
  box-shadow:inset 0 0 0 9999px rgb(0 0 0 / 2%)
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
    margin-top: -20px;
}
.AddNew{
  /* border:1px solid #3f48CC; */
  border:none;
  color:#ffffff;
  font-size: 16px;
  float:right;
  background-color:#3f48CC;
  margin-top:14px;
}


.AddNew a{
  color:#ffffff;
}

.breadcrumb {
  background: transparent;
  justify-content: center;
  align-items: center;
  margin: -3px 0 1.25rem;

 }
.breadcrumb img{
  margin-top: -70px;
  margin-bottom: -45px;
  
}

  .breadcrumb h4 {
    margin-left:2px;
    margin-top: -20px;
    position: absolute;
    color: var(--white);
    text-align:center;
    font-family: Frozen;
    font-weight: 600;
    font-size: 1.4rem;
    line-height: 1;
     }
     .card {
    border-radius: 10px;
    box-shadow: 0 4px 20px 1px rgb(0 0 0 / 6%), 0 1px 4px rgb(0 0 0 / 8%);
    border: 0;
    margin: -16px;
}
table {
  border: 1px #a39485 solid;
  font-size: .9em;
  box-shadow: 0 2px 5px rgba(0,0,0,.25);
  width: 100%;
  border-collapse: collapse;
  border-radius: 5px;
  overflow: hidden;
}

th {
  text-align: left;
}
  
thead {
  font-weight: bold;
  color: #fff;
  background: #445AD3;
}
  
 td, th {
  padding: 1em .5em;
  vertical-align: middle;
}
  
 td {
  border-bottom: 1px solid rgba(0,0,0,.1);
  background: #fff;
}

  
 @media all and (max-width: 768px) {
    
  table, thead, tbody, th, td, tr {
    display: block;
  }
  
  th {
    text-align: right;
  }
  
  table {
    position: relative; 
    padding-bottom: 0;
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
  }
  
  thead {
    float: left;
    white-space: nowrap;
  }
  
  tbody {
    overflow-x: auto;
    overflow-y: hidden;
    position: relative;
    white-space: nowrap;
  }
  
  tr {
    display: inline-block;
    vertical-align: top;
  }
  
  th {
    border-bottom: 1px solid #a39485;
  }
  
  td {
    border-bottom: 1px solid #e5e5e5;
  }
  .AddNew{
    margin:4px 0px;
}

  }

  
    </style>



<!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
              <div class="breadcrumb">
                <img height="50px" width="280px" src="<?php echo base_url() ?>Assets\images\ribbon.png ">
                    <h4>Add Company</h4>
                    <!-- <ul>
                        <li><a href="href.html">Form</a></li>
                        <li>Basic</li>
                    </ul> -->
                </div>
                <div style="margin-top:-10px;" class=" border-top"></div>
                <div class="row card p-3">
                    <div class="col-12">
                        <div class=" p-2">
                        <div class="bord"><h3></h3>
                           <div class="table-responsive">
                                    <table class=" display nowrapdisplay table table-striped table-bordered" id="example" style="width:100%">
                                    <thead> <!-- Button trigger modal -->
                                      <div class="addnewbutton">
                                      <!-- <a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a> -->
                                      <button type="button" class=" btn Addnew"><a href="create"><i class="fas fa-plus-circle animtxt" aria-hidden="true"></i>&nbsp;Add New</a></button>
                                      </div>
                                                <tr>
                                                <!-- <th>Sr.No</th> -->
                                                <th>Action</td>
                                                  <th>Branch Id</th>            
                                                    <th>Branch Name </th>
                                                    
                                                </tr>
                                </thead>

      
                                             <tbody>
                                                <?php
                                                for ($i=0; $i <count($data) ; $i++) { 
                                                    echo '<tr>';
                                                     echo '<td><a href="'. base_url().'Branch/create/'.$data[$i]->branch_id.'"><i class="fas fa-eye" style="font-size: 16px;"></i></a></td>';
                                                    echo '<td>'.$data[$i]->branch_id .'</td>';
                                                    echo '<td>'.$data[$i]->branch_name.'</td>';
                                                    
                                                  
                                                        echo '</tr>';    
                                                           
                                                    
                                                    }

                                                    ?>
                                                </tbody>
           
    </table>
                            </div>
                        </div>
                    </div>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src=https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js></script> 
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script> 
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap3.min.js"></script>