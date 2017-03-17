<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row">

                <div class="col-lg-8">
                        <h2>Total Number of Policy</h2>

                        <form action="<?php echo base_url();?>Modules2/addAgent" method="post">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <select class="form-control" name="agentChoose" id="agentchoose">
                                              <option selected disabled>Select Agent</option> 
                                              <?php if(isset($agent)){?>

                                                <?php foreach($agent as $row):?>
                                                 <option value="<?php echo $row['AgentID']?>"><?php echo ucfirst($row['FirstName']).'  '. ucfirst($row['LastName']); ?></option>

                                                <?php endforeach;?>
                                              <?php }?>
                                        </select>
                                    </div>

                                    <div class="col-lg-5">
                                        <p> Total Number of Policy: <span id="totalpolicy"> </span> </p> 
                                    </div> 
                                </div>
                                                                       
                            </div>   
                        <form>     

                        <br>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Name of Plan</th>
                                        <th>Premium</th>
                                        <th>Policy Amount</th>
                                        <th>Mode of Payment</th>
                                    </tr>
                                </thead>
                                <tbody id="client">
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </div>           

    </div>

</div>
    

<style>
    
    th{
        text-align: center;
    }

    td{
        text-align: center;
    }

</style>            


<script type="text/javascript">

    $('#agentchoose').on('change',function(){

       var agent = $(this).val();

       
        var url = "<?php echo base_url();?>Modules2/getAgents/"+agent;
        
        $.getJSON(url,function(result){
            $('#client').empty();
            $('#totalpolicy').text(result.length);
            // console.log(result);
            $.each(result,function(value,element){
                // alert(element.FirstName);
                $('#client').append(
                    '<tr>'+
                    '<td>'+element.cFirstName+' '+element.cLastName+'</td>'+
                    '<td>'+element.Product+'</td>'+
                    '<td>'+element.Premium+'</td>'+
                    '<td>'+element.Pamount+'</td>'+
                    '<td>'+element.Mode+'</td>'+
                    '</tr>'
                    );
            });


        });

    });

</script>