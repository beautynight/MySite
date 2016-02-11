      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

          <div class="mw800 center-block">

            <div class="panel mt20" id="spy1">
              <div class="panel-heading">
                <span class="panel-icon">
                  <i class="fa fa-crop"></i>
                </span>
                <span class="panel-title"> Image Cropping Utility</span>
              </div>
              <div class="panel-body pn">
                <div class="row table-layout table-clear-xs">
                  <div class="col-xs-12 col-sm-7">
                    <div class="img-container pv10">
                      <img src="assets/img/stock/5.jpg">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-5 bg-light br-l br-grey va-t pv10">
                    <div class="">
                      <div class="docs-toggles">
                        <!-- <h3 class="page-header">Toggles:</h3> -->
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                          <label class="btn btn-primary active" data-method="setAspectRatio" data-option="1.5" title="Set Aspect Ratio">
                            <input class="sr-only" id="aspestRatio1" name="aspestRatio" value="1.5" type="radio">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 1.5)">
                              1.5
                            </span>
                          </label>
                          <label class="btn btn-primary" data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio">
                            <input class="sr-only" id="aspestRatio2" name="aspestRatio" value="1.3333333333333333" type="radio">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 4 / 3)">
                              4:3
                            </span>
                          </label>
                          <label class="btn btn-primary" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio">
                            <input class="sr-only" id="aspestRatio3" name="aspestRatio" value="1" type="radio">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 1 / 1)">
                              1:1
                            </span>
                          </label>
                          <label class="btn btn-primary" data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio">
                            <input class="sr-only" id="aspestRatio4" name="aspestRatio" value="0.6666666666666666" type="radio">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, 2 / 3)">
                              2:3
                            </span>
                          </label>
                          <label class="btn btn-primary" data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio">
                            <input class="sr-only" id="aspestRatio5" name="aspestRatio" value="NaN" type="radio">
                            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setAspectRatio&quot;, NaN)">
                              Free
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix">
                      <div class="img-preview preview-lg"><img src="assets/img/stock/1.jpg"></div>
                      <div class="img-preview preview-md"><img src="assets/img/stock/1.jpg"></div>
                      <div class="img-preview preview-sm"><img src="assets/img/stock/1.jpg"></div>
                      <div class="img-preview preview-xs"><img src="assets/img/stock/1.jpg"></div>
                    </div>
                    <div class="">
                      <div class="docs-toggles">
                        <div class="dropdown dropup docs-options">
                          <button class="btn btn-primary btn-block dropdown-toggle" id="toggleOptions" type="button" data-toggle="dropdown" aria-expanded="true">
                            Toggle Options
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="strict" checked> strict
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="responsive" checked> responsive
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="checkImageOrigin" checked> checkImageOrigin
                              </label>
                            </li>

                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="modal" checked> modal
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="guides" checked> guides
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="highlight" checked> highlight
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="background" checked> background
                              </label>
                            </li>

                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="autoCrop" checked> autoCrop
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="dragCrop" checked> dragCrop
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="movable" checked> movable
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="resizable" checked> resizable
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="rotatable" checked> rotatable
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="zoomable" checked> zoomable
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="touchDragZoom" checked> touchDragZoom
                              </label>
                            </li>
                            <li role="presentation">
                              <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="mouseWheelZoom" checked> mouseWheelZoom
                              </label>
                            </li>
                          </ul>
                        </div>
                        <!-- /.dropdown -->
                      </div>
                    </div>
                  </div>
                </div>


              </div>
              <div class="panel-footer">
                <div class="docs-buttons">
                  <div class="btn-group">
                    <button class="btn btn-primary btn-sm" data-method="setDragMode" data-option="move" type="button" title="Move">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                        <span class="fa fa-arrows"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="setDragMode" data-option="crop" type="button" title="Crop">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                        <span class="fa fa-crop"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="zoom" data-option="0.1" type="button" title="Zoom In">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
                        <span class="fa fa-search-plus"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
                        <span class="fa fa-search-minus"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="rotate" data-option="-45" type="button" title="Rotate Left">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)">
                        <span class="fa fa-rotate-left"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="rotate" data-option="45" type="button" title="Rotate Right">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)">
                        <span class="fa fa-rotate-right"></span>
                      </span>
                    </button>
                  </div>

                  <div class="btn-group">
                    <button class="btn btn-primary btn-sm" data-method="disable" type="button" title="Disable">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)">
                        <span class="fa fa-lock"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="enable" type="button" title="Enable">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)">
                        <span class="fa fa-unlock"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="clear" type="button" title="Clear">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)">
                        <span class="fa fa-remove"></span>
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="reset" type="button" title="Reset">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
                        <span class="fa fa-refresh"></span>
                      </span>
                    </button>
                    <label class="btn btn-primary btn-sm btn-upload" for="inputImage" title="Upload image file">
                      <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*">
                      <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
                        <span class="fa fa-upload"></span>
                      </span>
                    </label>
                    <button class="btn btn-primary btn-sm" data-method="destroy" type="button" title="Destroy">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)">
                        <span class="fa fa-power-off"></span>
                      </span>
                    </button>
                  </div>

                  <div class="btn-group btn-group-crop">
                    <button class="btn btn-primary btn-sm" data-method="getCroppedCanvas" type="button">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
                        Get Cropped Canvas
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }" type="button">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { &quot;width&quot;: 160, &quot;height&quot;: 90 })">
                        160 &times; 90
                      </span>
                    </button>
                    <button class="btn btn-primary btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }" type="button">
                      <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { &quot;width&quot;: 320, &quot;height&quot;: 180 })">
                        320 &times; 180
                      </span>
                    </button>
                  </div>

                  <!-- Show the cropped image in modal -->
                  <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal" type="button" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                        </div>
                        <div class="modal-body"></div>
                        <!-- <div class="modal-footer">
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">Close</button>
                                  </div> -->
                      </div>
                    </div>
                  </div>
                  <!-- /.modal -->

                  <button class="btn btn-primary btn-sm" data-method="getData" data-option="" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)">
                      Get Data
                    </span>
                  </button>
                  <button class="btn btn-primary btn-sm" data-method="getImageData" data-option="" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)">
                      Get Image Data
                    </span>
                  </button>
                  <button class="btn btn-primary btn-sm" data-method="getCanvasData" data-option="" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)">
                      Get Canvas Data
                    </span>
                  </button>
                  <button class="btn btn-primary btn-sm" data-method="setCanvasData" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)">
                      Set Canvas Data
                    </span>
                  </button>
                  <button class="btn btn-primary btn-sm" data-method="getCropBoxData" data-option="" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)">
                      Get Crop Box Data
                    </span>
                  </button>
                  <button class="btn btn-primary btn-sm" data-method="setCropBoxData" data-target="#putData" type="button">
                    <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                      Set Crop Box Data
                    </span>
                  </button>
                  <input class="form-control mt5" id="putData" type="text" placeholder="Get data to here or set data with this value">

                </div>
              </div>
            </div>

            <div class="panel mt50" id="spy2">
              <div class="panel-heading">
                <span class="panel-icon">
                  <i class="fa fa-upload"></i>
                </span>
                <span class="panel-title"> Image Upload & Preview</span>
              </div>
              <div class="panel-body">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                  <div class="fileupload-preview thumbnail mb20">
                    <img data-src="holder.js/100%x195" alt="holder">
                  </div>
                  <div class="row">
                    <div class="col-xs-7 pr5">
                      <input type="text" name="name2" id="name2" class="form-control text-center event-name br-light bg-light" placeholder="Img Keywords">
                      <label for="name2" class="field-icon"></label>
                    </div>
                    <div class="col-xs-5">
                      <span class="btn btn-system btn-file btn-block">
                        <span class="fileupload-new">Select</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel mt50" id="spy3">
              <div class="panel-heading">
                <span class="panel-icon">
                  <i class="fa fa-search"></i>
                </span>
                <span class="panel-title"> Image Zoom Utility</span>
              </div>
              <div class="panel-menu p10">

                <!-- zoom style switcher(demo code) -->
                <div class="btn-group zoom-switcher btn-group-justified">
                  <a href="#" type="button" class="btn btn-default active" opt="1">Porthole</a>
                  <a href="#" type="button" class="btn btn-default" opt="2">InnerZoom</a>
                  <a href="#" type="button" class="btn btn-default" opt="3">Attached</a>
                </div>

              </div>
              <div class="panel-body p10">
                <!-- zoomable image -->
                <img id="zoom_demo" class="img-responsive" src="assets/img/stock/3.jpg" data-zoom-image="assets/img/stock/3.jpg" />
              </div>
            </div>

          </div>

        </div>
        <!-- end: .tray-center -->

        <!-- begin: .tray-left -->
        <aside class="tray tray-right tray320" data-tray-height="match">

          <h4> AdminDesigns -<small>Image Tools!</small></h4>
          <ul class="icon-list">
              <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> Author:</b> AdminDesigns
              </li>
              <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> License:</b> Mit - Free to use
              </li>
              <li>
                <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
                <b> Website:</b>
                <a href="http://www.admindesigns.com/"> www.admindesigns.com </a>
              </li>
            </ul>

          <div id="nav-spy">
            <ul class="nav tray-nav tray-nav-border" data-smoothscroll="-75" data-spy="affix" data-offset-top="200">
              <li class="active">
                <a href="#spy1">
                  <span class="fa fa-crop fa-lg"></span>
                  Image Cropper</a>
              </li>
              <li>
                <a href="#spy2">
                  <span class="fa fa-upload fa-lg"></span>
                  Image Upload w/Preview</a>
              </li>
              <li>
                <a href="#spy3">
                  <span class="fa fa-search fa-lg"></span>
                  Image Zoom Utility</a>
              </li>

            </ul>
          </div>

        </aside>
        <!-- end: .tray-left -->


      </section>
      <!-- End: Content -->