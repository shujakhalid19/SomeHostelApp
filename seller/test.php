<?php
session_start();

include('../requests/core/company.class.php');
$comp= new Company();


function clean_encode($string) {
    //NOW IM PROFILE CLASS ******** !!!!IMPORTANT
    $string=base64_encode($string);
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    #.replace(/[^\w\s]/gi, '')
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

    $hostId=base64_decode($_POST['hostId']);
    $gallery=$comp->getGallery($hostId);

?>

<div class="col-md-12 col-sm-12 col-sx-12">
<div style="opacity:0;">
    <form id="imgForm" method="POST" enctype= "multipart/form-data">
        <input type="hidden" id="time" name='time' />
        <input class="fileToUpload" name="fileToUpload" type="file" />
    </form>
                        
    
                </div>
            <div class="pull-right bd col-xs-2 bg-lav" style="padding:5px;height:50px;" onclick="newGal()">
                <div class="md-top-10 text-center b">Add New</div>

            </div>


            <div id="images" class="col-xs-12 col-sm-12 col-md-12 md-top-10" style="padding:0px;">
            
            <?php
                $arr=['https://images.unsplash.com/photo-1520277739336-7bf67edfa768?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1555854877-bab0e564b8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1600077625345-f401f4ba2fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1552312994-c9e517c23bd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'];
                if(!empty($gallery)){
                    foreach ($gallery as $g) {
                        
                    
                 
            ?>
                <div class="col-md-4 col-xs-12" style="padding:5px;">
                    <img src="../uploads/gallery/<?=clean_encode($_SESSION['sel_userId']);?>/<?=clean_encode($g['hostelId']);?>/<?=$g['image'];?>" style="height:250px;width:100%;object-fit:cover;"/>
                </div>
            <?php
                }
            }else{
                ?>
                <div class="col-md-12 col-xs-12" style="padding:5px;">
                    
                </div>
            <?php
                }
            ?>
            </div>
        </div>

<script>
    var d=new Date();
    $(function(){
        console.log(clean_encode('asdad'));

        $(".fileToUpload").change(function() {
            $("form#imgForm").submit();
        });

        $("form#imgForm").on('submit', function(event) {
            $("#time").val(d.getTime());
            event.preventDefault();

            //var form = $(this);
            var formData = new FormData(this);
            var url = '../requests/profile.php';
            formData.append('addToGal',true);
            formData.append('hostelId',atob(hostId));
            
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(data) {
                    var resp=JSON.parse(data);
                    if(resp.fis!==false){
                        $("#images").prepend('<div class="col-md-2 col-xs-12" style="padding:5px;"><img src="'+resp.type+resp.file+'" style="height:120px;width:100%;object-fit:cover;"/></div>');
                    }else{
                        console.warn('err',resp);
                    }
                }, cache: false,
                contentType: false,
                processData: false
            });
        });

    });
    

    function newGal(){
        alert('asd');
        $(".fileToUpload").trigger('click');
    }
</script>