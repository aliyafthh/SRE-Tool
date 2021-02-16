

<!-- EDIT BUTTON MODAL GITULAH -->
<script type="text/javascript">
    $(document).ready(function(){

$('.editbtn').on('click',function(){

  $('#editmodal').modal('show');
      $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function(){
          return $(this).text();

        }).get();
        console.log(data);
        $('#updateid').val(data[0]);
        $('#error').val(data[3]);
        $('#foundby').val(data[4]);
        $('#supportby').val(data[5]);
      });
    });
    </script>


