<?php 
	if (isset($_SESSION{'success'})):?>
	Thanh toán thành công!!

<button type="button" id="btn_open" class="btn btn-info btn-lg" style="display: none" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tình trạng thanh toán</h4>
        </div>
        <div class="modal-body">
          <?php echo "<h3 style='text-align:center; color:red'>".$_SESSION['success']."</h3>";?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="btn_continue" data-dismiss="modal">Tiếp tục mua hàng</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php  unset($_SESSION['success']); unset($_SESSION['cart']);?>
  <?php else: echo "Đã thanh toán! <a href='../hang-hoa/liet-ke.php'> quay lại mua hàng</a>"; ?>
<?php  endif;?>
  <script type="text/javascript">
    $(document).ready(function(){
      _goiModal();

      function _goiModal(){
        $("#btn_open").trigger('click');
      }

      $("#btn_continue").click(function(){
        console.log('nhan nut ori')
        _goto("../hang-hoa/liet-ke.php")
      })


      function _goto(url){
          window.location = url;
      }

    })
  </script>