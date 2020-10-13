<div class="modal fade" id="pilih_pembayaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title centered" id="myModalLabel"><strong>Pilih Pembayaran</strong></h4>
        </div>
        <div class="modal-body">
            <tbody>
                <tr class="success">
                  <div class="radio">
                    <td width="200px"><label><input type="radio" name="optradio" value="cash" >Cash</label></td>
                    <td width="200px"><label><input type="radio" name="optradio" value="saldo" checked>Saldo Docotin</label></td>
                  </div>
                </tr>
              </tbody>
            </table>
            <div class="radio-saldo">          
              <div class="alert alert-danger">
              <strong>Saldo Anda Rp. 70.000</strong>
              </div>
              <div class="modal-footer">
                <a href="list_pemesanan.html"><button type="button" class="btn btn-primary">Lanjutkan</button></a> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <div class="radio-cash">
              <div class="modal-footer">
                <a href="list_pemesanan.html"><button type="button" class="btn btn-primary">Lanjutkan</button></a> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
    

	<div class="content">
    <div class= "box-masuk">
      <div class= "row">
        <div class="col-md-7">
          <div>
            <div class="row gap-bottom1">
              <div class="col-md-3">
                Nama Pembeli
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control">
              </div>
              <br><br>
              <div class="col-md-3">
                Lantai
              </div>
              <div class="col-md-9">
                <input type="number" class="form-control">
              </div>
              <br><br>
              <div class="col-md-3">
                No Handphone
              </div>
              <div class="col-md-9">
                <input type="number" class="form-control">
              </div>
              <br><br>
              <div class="col-md-3">
                  <button type="button" class="btn btn-primary">Ubah</button>
              </div>


            </div>
          </div>
          <div>
         
        </div>
      </div>
        <div class="col-md-5">
          <div class="panel-total">
          <div class="panel">
            <div class="panel-header">Total Belanja Kamu</div>
            <p>Mie Indomie Saus Eropa</p>
            <p>Rp 10.000 x 3 = Rp 30.000</p>
            <p>Mie Indomie Saus Afrika</p>
            <p>Rp 10.000 x 3 = Rp 30.000</p>
            <h5 class="total-keseluruhan"> Total Keseluruhan<span id="count"></span></h5>
            <h5 class="total"> <span id="count">Rp 60.000</span></h5>
            <br><br>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pilih_pembayaran">
                Pilih Pembayaran
              </button>
  
            <br><br>  
          </div> 
        </div> 
        </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.radio-cash').hide()					
  
      $('input[name=optradio]').on('change', function() {
        values=$('input[name=optradio]:checked').val()
        if(values == "saldo"){
          $('.radio-saldo').show()
          $('.radio-cash').hide()					
        } else {
          $('.radio-saldo').hide()
          $('.radio-cash').show()
        }
      });
        
    });
    </script>