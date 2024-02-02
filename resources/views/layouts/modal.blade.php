 <!-- Modal -->
 <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="indicator"></div>
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel"></h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="wrapper">
                    <header>File Uploader JavaScript</header>
                    <form class="upload-form" action="#">
                      <input class="file-input" type="file" name="file" hidden>
                      <i class="fas fa-cloud-upload-alt"></i>
                      <p>Browse File to Upload</p>
                    </form>
                    <section class="progress-area"></section>
                    <section class="uploaded-area"></section>
                  </div>
             </div>
             <div class="row col-md-12 ml-auto mr-auto preview"></div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                 <span class="btn btn-info btn-sm" disabled>Save changes</span>
             </div>
         </div>
     </div>
 </div>
 
