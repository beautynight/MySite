

      
      <!-- Begin: Content -->

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

            <!-- Begin: Content Header -->
            <div class="content-header">
              <h2> AdminForms makes <b class="text-primary">Validation</b> is easier than ever</h2>
              <p class="lead">Use the Admin Forms you know and love to help build the perfect form.</p>
            </div>

            <!-- Validation Example -->
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

              <div class="panel heading-border panel-primary">

                <form method="post" action="/" id="admin-form" novalidate="novalidate">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Форма добавления проекта </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row" >
                      <div class="section">
                        <label for="projectname" class="field prepend-icon">
                          <input type="text" name="projectname" class="gui-input" placeholder="Название проекта">
                          <label for="projectname" class="field-icon">
                            <i class="fa fa-pencil"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                    <div class="section">
                      <label for="useremail" class="field prepend-icon">
                        <input type="email" name="useremail" class="gui-input" placeholder="Email">
                        <label for="useremail" class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>

                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="website" class="field prepend-icon">
                        <input type="url" name="website" class="gui-input" placeholder="Ссылка на проект">
                        <label for="website" class="field-icon">
                          <i class="fa fa-globe"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="comment" class="field prepend-icon">
                        <textarea class="gui-textarea" name="comment" placeholder="Описание проекта"></textarea>
                        <label for="comment" class="field-icon">
                          <i class="fa fa-newspaper-o"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label class="field select">
                        <select name="paymenttype">
                          <option value="">Тип выплат</option>
                          <option value="manual">Ручной</option>
                          <option value="instant">Инстант (мгновенный)</option>
                          <option value="auto">Автоматический</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section -->

                    <!-- <div class="section">
                      <label for="website" class="field prepend-icon">
                        <input type="url" name="website" id="website" class="gui-input" placeholder="Ссылка на проект">
                        <label for="website" class="field-icon">
                          <i class="glyphicons glyphicons-money"></i>
                        </label>
                      </label>
                    </div>
                    end section -->

                    <div class="section-divider mv40">
                      <span> Тарифные планы </span>
                    </div>
                    <!-- .section-divider -->
					

                    <div class="section mb10">
                      <div class="section row mb10">

						  <div class="col-md-3">
							<label for="percents" class="field append-icon">
							  <input type="percents" name="percents" class="gui-input onlyNumber" placeholder="Прибыль">
							  <label for="percents" class="field-icon">
								<i class="fa fa-percent"></i>
							  </label>
							</label>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-3 prn">
							  <div class="smart-widget sm-left sml-80">
								<label class="field append-icon">
								  <input type="afterTime" name="time" class="gui-input onlyNumber">							  
								  <label for="percents" class="field-icon">
									<i class="glyphicons glyphicons-clock"></i>
								  </label>
								</label>
								<label class="button w15" for="sm">через</label>
							  </div>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-2 mln1 pln">
							<label class="field select">
							  <select name="hour">
								<option value="1">минут</option>
								<option value="2">часов</option>
								<option value="3" selected>дней</option>
								<option value="4">недель</option>
								<option value="5">месяцев</option>
							  </select>
							  <i class="arrow double"></i>
							</label>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-3 prn" >
							  <div class="smart-widget sm-left sml-50">
								<label class="field append-icon">
								  <input type="afterTime" name="time" class="gui-input onlyNumber">							  
								  <label for="percents" class="field-icon">
									<i class="fa fa-money"></i>
								  </label>
								</label>
								<label class="button prn pln" for="sm">от</label>
							  </div>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-1 mln1 pln fa"  style="top: 0px">
							<label class="field select">
							  <select name="hour">
								<option value="1">&#xf155;</option>
								<option value="2">&#xf153;</option>
								<option value="3">&#xf15a;</option>
								<option value="4">&#xf158;</option>
								<option value="5">&#xf154;</option>
								<option value="6">&#xf157;</option>
								<option value="7">&#xf159;</option>
								<option value="8">&#xf156;</option>
							  </select>
							  <i class="arrow double"></i>
							</label>
						  </div>
						  <!-- end section -->
						  
						</div>

                    </div>
                    <!-- end .section row section -->
					  
                    <div class="section">
						<button type="button" class="button btn-primary copy"> Добавить план </button>
					</div>
					
					

                    <div class="section-divider mt40 mb20">
                      <span> Реферальная программа </span>
                    </div>
                    <!-- .section-divider -->
                    <div class="section mb10">
                      <div class="section row mb10">						  
						  <div class="col-md-12" >
							  <div class="smart-widget sm-left sml-120">
								<label class="field append-icon">
								  <input type="afterTime" name="time" class="gui-input onlyNumber" placeholder="%">							  
								  <label for="percents" class="field-icon">
									<i class="fa fa-street-view"></i>
								  </label>
								</label>
								<label class="button prn pln" for="sm"><n>1</n> уровень</label>
							  </div>
						  </div>
						  <!-- end section -->
						</div>
					</div>
					  
                    <div class="section">
						<button type="button" class="button btn-primary copy"> Добавить уровень </button>
					</div>
                    <!-- end section -->

                    <div class="section-divider mt40 mb20">
                      <span> Языки сайта </span>
                    </div>
                    <!-- .section-divider -->

					<div class="option-group field">
                    <div class="section row">
						<?php						
						  $db->query("select name, shortname, own_name, flag from languages where pos is not null order by pos");
						  $div = ceil($db->nums/3);
						  foreach($db->result as $k => $v) {
							if ($k%$div === 0) echo '<div class="col-md-4 pad-r40 border-right">';
							echo '<label class="block mt15 option option-primary"><input type="checkbox" name="languages" value="'.$v['shortname'].'"><span class="checkbox"></span> <i class="flag flag-'.$v['flag'].'" ></i>'.$v['name']." ( {$v['own_name']} )".'</label>';
							if (($k+1)%$div === 0  ||  $k === $db->nums-1) echo '</div>';
						  }
						?>					  
                    </div>
					
					<div class="section row" hidden>
						<?php						
						  $db->query("select name, shortname, own_name, flag from languages where pos is null order by name");
						  $div = ceil($db->nums/3);
						  foreach($db->result as $k => $v) {
							if ($k%$div === 0) echo '<div class="col-md-4 pad-r40 border-right">';
							echo '<label class="block mt15 option option-primary"><input type="checkbox" name="languages" value="'.$v['shortname'].'"><span class="checkbox"></span> <i class="flag flag-'.$v['flag'].'" ></i>'.$v['name']." ( {$v['own_name']} )".'</label>';
							if (($k+1)%$div === 0  ||  $k === $db->nums-1) echo '</div>';
						  }
						?>
                    </div>
                    <div class="section">
						<button type="button" class="button btn-primary showPrev"> Показать все языки </button>
					</div>
					
					</div>
					
					


                    <div class="section-divider mv40">
                      <span> Проверочный код </span>
                    </div>
                    <!-- .section-divider -->
                    <div class="section">
                      <div class="smart-widget sm-left sml-120">
                        <label for="verification" class="field prepend-icon">
                          <input type="text" name="verification" class="gui-input" placeholder="Проверочный код">
                          <label for="verification" class="field-icon">
                            <i class="fa fa-shield"></i>
                          </label>
                        </label>
                        <label for="verification" class="button btn-primary"><?= $c[0]; ?> + <?= $c[1]; ?> = </label>
                      </div>
                      <!-- end .smart-widget section -->
                    </div>
                    <!-- end section -->
					
					
					
					
					
					
					
					
					
					
					
					  <div class="center-block">

						<div class="panel mt20" id="spy1">
						  <div class="panel-body pn">
							<div class="row table-layout table-clear-xs">
								<div class="img-container pv10">
								  <img src="assets/img/stock/1.jpg">
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
								<button class="btn btn-primary btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 1500, &quot;height&quot;: 1000 }" type="button">
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
						</div>
						
						
						
						
						



                  </div>
                  <!-- end .form-body section -->
                  <div class="panel-footer text-right">
                    <button type="submit" class="button btn-primary"> Отправить форму </button>
                  </div>
                  <!-- end .form-footer section -->
                </form>

              </div>

            </div>
            <!-- end: .admin-form -->

        </div>
        <!-- end: .tray-center -->
      <!-- End: Content -->
	  