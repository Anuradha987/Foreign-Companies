<head>            <!-- boostrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
        


        <!-- Begin Page Content -->
                <div class="container-fluid">

                        <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hired Employees</h1>
                       
                        <!-- <script>
                            function getUniqueValuesFromColumn(){
                                var unique_col_values_dict = {}
                                allFilters = document.querySelectorAll(".table-filter")
                                allFilters.forEach(filter_i =>{
                                    col_index = filter_i.parentelement.innerHTML;
                                    alert(col_index)
                                })
                            }
                        </script> -->

                        <select id="SelectOptions" class="btn btn-primary dropdown-toggle table-filter">
                          <option selected="selected" disabled="">Select the qualification</option>
                          <option id="9" value="9">All</option>
                          <option id="1" value="1">O/L</option>
                          <option id="2" value="2">A/L or Foundation</option>
                          <option id="3" value="3">Certificate of Higher Education</option>
                          <option id="4" value="4">Diploma</option>
                          <option id="5" value="5">Bachelor's Degree</option>
                          <option id="6" value="6">Masters</option>
                          <option id="7" value="7">Post Graduate Diploma</option>
                        </select>

                    </div>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
                            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr id = "table-data">
                                            <th col.index = 1>NIC</th>
                                            <th col.index = 2>Name</th>
                                            <th col.index = 3>Current Location</th>
                                            <th col.index = 4>Highest Level of Education</th>
                                            <th col.index = 5>Email</th>
                                            <th col.index = 6>Hire</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NIC</th>
                                            <th>Name</th>
                                            <th>Current Location</th>
                                            <th>Highest Level of Education</th>
                                            <th>Email</th>
                                            <th>Hire</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="load-table">
                                    </tbody>
                                </table>
                                                                
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                
            </div>
            <!-- End of Main Content -->

              
  <!-- Popup Modal Box for Update the Records class="modal fade" -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Citizen's Data</h5>
        <button type="button" id="close-btn" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-form">
        <div class="form-group">
                        <label> National ID Number </label>
                        <input type="nic" name="nic" id="edit-nic" class="form-control">
                        <input type="text" name="id" id="edit-id" hidden="">
                    </div>

                    <div class="form-group">
                        <label> Full Name </label>
                        <input type="text" name="fullname" id="edit-fullname" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" name="email" id="edit-email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Birthday </label>
                        <input type="date" name="birthday" id="edit-birthday" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Address </label>
                        <input type="textbox" name="address" id="edit-address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Location </label>
                        <input type="text" name="lat" id="edit-lat" class="form-control">
                        <input type="text" name="lng" id="edit-lng" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Profession/Job </label>
                        <input type="text" name="profession" id="edit-profession" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Highest Education </label>
                        <input type="text" name="highEdu" id="edit-highEdu" class="form-control">
                    </div>

                    <div class="form-group">
                         <label for="exampleFormControlFile1">CV</label>
                         <input type="file" name="cv" class="form-control-file" id="edit-cv exampleFormControlFile1">
                         <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> 
                    </div>
                    
                    <div class="form-group">
                         <label for="exampleFormControlFile1">Cover Latter</label>
                         <input type="file" name="clatter" class="form-control-file" accept=".pdf" id="edit-coverletter exampleFormControlFile1">
                         <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/>
                    </div>
                    <div class="form-group">
                         <label for="exampleFormControlFile1">Certificates & Other Documents</label>
                         <input type="file" name="documents" class="form-control-file" id="edit-otherDocs exampleFormControlFile1" multiple>
                         <input type="hidden" name="MAX_FILE_SIZE" value="16777215"/>
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="removeBtn" class="btn btn-primary">Remove</button>
      </div>
      
      <div id= "error-message" class="message alert alert-danger" role="alert"></div>
      <div id= "success-message" class="message alert alert-success" role="alert"></div>

    </div>
  </div>
</div>
           
    <?php include('includes/scripts.php');?>
           
<script type="text/javascript">
$(document).ready(function(){

  //get All new citizens records
  function loadTable(){ 
    $("#load-table").html("");
    $.ajax({ 
      url : 'http://localhost/apicopy/foreign_backend/getAllHiredEmp.php',
      type : "GET",
      success : function(data){
        if(data.status == false){
          $("#load-table").append("<tr><td colspan='6'><h2>"+ data.message +"</h2></td></tr>");
        }else{
          $.each(data, function(key, value){ 
            $("#load-table").append("<tr>" + 
                                    "<td>" + value.c_nic + "</td>" + 
                                    "<td>" + value.c_name +"</td>" + 
                                    "<td>" + value.c_latitude + ",\n" +value.c_longitude+ "</td>" + 
                                    "<td>" + value.e_name +"</td>" + 
                                    "<td>" + value.c_email +"</td>" + 
                                     "<td><button class='edit-btn btn btn-success' data-toggle='modal' data-target='#exampleModal' data-eid='"+ value.c_id + "'>View More</button></td>" +
                                    "</tr>");
          });
        }
      }
    });
  }
loadTable();
});

//get a single record
$(document).on("click",".edit-btn",function(){
   // $("#exampleModal").show();
    var cid = $(this).data("eid");
    var obj = {id : cid};
    var myJSON = JSON.stringify(obj);

    $.ajax({
      url : 'http://localhost/apicopy/foreign_backend/getSingle.php',
      type : "POST",
      data : myJSON,
      success : function(data){
        $("#edit-id").val(data[0].c_id);
        $("#edit-nic").val(data[0].c_nic);
        $("#edit-fullname").val(data[0].c_name);
        $("#edit-email").val(data[0].c_email);
        $("#edit-birthday").val(data[0].c_birthday);
        $("#edit-address").val(data[0].c_address);
        $("#edit-lat").val(data[0].c_latitude);
        $("#edit-lng").val(data[0].c_longitude);
        $("#edit-profession").val(data[0].c_profession);
        $("#edit-highEdu").val(data[0].e_name);
      }
    });

    //show success or error message
   function message(message, status){
    if(status == true){
      $("#success-message").html(message).slideDown();
      $("#error-message").slideUp();
      setTimeout(function(){
        $("#success-message").slideUp();
      },4000);

    }else if(status == false){
      $("#error-message").html(message).slideDown();
      $("#success-message").slideUp();
      setTimeout(function(){
        $("#error-message").slideUp();
      },4000);
    }
  }


    //function for converting form data to JSON Object
    function jsonData(targetForm){
      var arr = $(targetForm).serializeArray();
    
      var obj = {};
      for(var a= 0; a < arr.length; a++){
        if(arr[a].value == ""){
          return false;
        }
        obj[arr[a].name] = arr[a].value;
      }
      
      var json_string = JSON.stringify(obj);

      return json_string;
      
  }

    //remove employees - update the citizen_details table
  $("#removeBtn").on("click",function(e){
    e.preventDefault();

    var jsonObj = jsonData("#edit-form");

    if( jsonObj == false){
      message("All Fields are required.",false);
    }else{
      $.ajax({ 
      url : 'http://localhost/apicopy/foreign_backend/removeEmp.php',
      type : "POST",
      data : jsonObj,
      success : function(data){
        message(data.message, data.status);

        if(data.status == true){
          // $('#exampleModal').modal('hide');
          // $('.modal-backdrop').remove();
          loadTable();
        }
      }
    });
  }
  });


  });


  //Live search record
  $(document).ready(function() {

    $("#SelectOptions").change(function(){
      var search_term = $(this).val();
      alert(search_term);

      //if the dropdown value is All, then load all the data. 
      if(search_term==9){
        $("#load-table").html("");
    $.ajax({ 
      url : 'http://localhost/apicopy/foreign_backend/getAll.php',
      type : "GET",
      success : function(data){
        if(data.status == false){
          $("#load-table").append("<tr><td colspan='6'><h2>"+ data.message +"</h2></td></tr>");
        }else{
          $.each(data, function(key, value){ 
            $("#load-table").append("<tr>" + 
                                    "<td>" + value.c_nic + "</td>" + 
                                    "<td>" + value.c_name +"</td>" + 
                                    "<td>" + value.c_latitude + ",\n" +value.c_longitude+ "</td>" + 
                                    "<td>" + value.e_name +"</td>" + 
                                    "<td>" + value.c_email +"</td>" + 
                                     "<td><button class='edit-btn btn btn-success' data-toggle='modal' data-target='#exampleModal' data-eid='"+ value.c_id + "'>View More</button></td>" +
                                    "</tr>");
          });
        }
      }
    });
      }

//else filter data based on the selected qualification
      else{
      $("#load-table").html("");
       //  alert($("#SelectOptions option:selected")[0].text);
       $.ajax({ 
      url : 'http://localhost/apicopy/foreign_backend/search.php?search='+search_term,
      type : "GET",
      success : function(data){
        if(data.status == false){
          $("#load-table").append("<tr><td colspan='6'><h2>"+ data.message +"</h2></td></tr>");
        }else{
          $.each(data, function(key, value){ 
            $("#load-table").append("<tr>" + 
                                    "<td>" + value.c_nic + "</td>" + 
                                    "<td>" + value.c_name +"</td>" + 
                                    "<td>" + value.c_latitude + ",\n" +value.c_longitude+ "</td>" + 
                                    "<td>" + value.e_name +"</td>" + 
                                    "<td>" + value.c_email +"</td>" + 
                                     "<td><button class='edit-btn btn btn-success' data-toggle='modal' data-target='#exampleModal' data-eid='"+ value.c_id + "'>View More</button></td>" +
                                    "</tr>");
          });
        }
      }
    });

  }
    });

});
 
</script>    