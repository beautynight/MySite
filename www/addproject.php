

      
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

                <form method="post" action="/" id="addproject_form">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Форма добавления проекта </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row" >
                      <div class="section">
                        <label class="field prepend-icon">
                          <input name="projectname" class="gui-input onlyText" placeholder="Название проекта">
                          <label class="field-icon">
                            <i class="fa fa-pencil"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                    <div class="section">
                      <label class="field prepend-icon">
                        <input name="email" class="gui-input onlyEmail" placeholder="Email">
                        <label class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>

                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label class="field prepend-icon">
                        <input name="website" class="gui-input onlyUrl" placeholder="Ссылка на проект">
                        <label class="field-icon">
                          <i class="fa fa-globe"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label class="field prepend-icon">
                        <textarea class="gui-textarea" name="description" placeholder="Описание проекта"></textarea>
                        <label class="field-icon">
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
                    <div class="section-divider mv40">
                      <span> Тарифные планы </span>
                    </div>
                    <!-- .section-divider -->
					

					
						
                    <div class="section mb10" role="group">							
                      <div class="section row mb10" role="row">					  
						  <div class="col-md-3">
							<div class="section row mbn">
								<div class="col-md-3 w50 mr20">
									<button class="button btn-warning remove glyphicons glyphicons-remove_2" type="button" title="Удалить"> </button>
								</div>
								
								<div class="col-md-8 pln prn">
									<label class="field append-icon">
										<input placeholder="Прибыль" class="gui-input onlyNumber" name="percents[]">
										<label class="field-icon">
											<i class="fa fa-percent"></i>
										</label>
									</label>
								</div>
							</div>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-3 prn">
							  <div class="smart-widget sm-left sml-80">
								<label class="field append-icon">
								  <input class="gui-input onlyNumber" name="period[]">							  
								  <label class="field-icon">
									<i class="glyphicons glyphicons-clock"></i>
								  </label>
								</label>
								<label class="button w15">через</label>
							  </div>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-2 mln1 pln">
							<label class="field select">
							  <select name="periodtype[]">
								<option value="1">минут</option>
								<option value="2">часов</option>
								<option value="3" selected>дней</option>
								<option value="4">недель</option>
								<option value="5">месяцев</option>
								<option value="6">лет</option>
							  </select>
							  <i class="arrow double"></i>
							</label>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-3 prn" >
							  <div class="smart-widget sm-left sml-50">
								<label class="field append-icon">
								  <input class="gui-input onlyNumber" name="minmoney">							  
								  <label class="field-icon">
									<i class="fa fa-money"></i>
								  </label>
								</label>
								<label class="button prn pln">от</label>
							  </div>
						  </div>
						  <!-- end section -->
						  
						  <div class="col-md-1 mln1 pln fa"  style="top: 0px">
							<label class="field select">
							  <select name="currency[]">
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
                    <div class="section mb10 mrn20" role="group">
                        <div class="section row mb10 mrn" role="row">
						  <div class="col-md-1 w50 mr20" >
							<button type="button" class="button btn-warning remove glyphicons glyphicons-remove_2" title="Удалить"> </button>
						  </div>
								
						  <div class="col-md-11 pln" >
							  <div class="smart-widget sm-left sml-120">
								<label class="field append-icon">
								  <input name="ref_percent[]" class="gui-input onlyNumber" placeholder="%">							  
								  <label class="field-icon">
									<i class="fa fa-street-view"></i>
								  </label>
								</label>
								<label class="button prn pln" ><n>1</n> уровень</label>
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

					<div class="langs">
                    <div class="section row">
						<?php						
						  $db->query("select name, shortname, own_name, flag from languages where pos is not null order by pos");
						  $div = ceil($db->nums/3);
						  foreach($db->result as $k => $v) {
							if ($k%$div === 0) echo '<div class="col-md-4 pad-r40 border-right">';
							echo '<label class="block mt15 option option-primary"><input type="checkbox" name="lang[]" value="'.$v['shortname'].'"><span class="checkbox"></span> <i class="flag flag-'.$v['flag'].'" ></i>'.$v['name']." ( {$v['own_name']} )".'</label>';
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
							echo '<label class="block mt15 option option-primary"><input type="checkbox" name="lang[]" value="'.$v['shortname'].'"><span class="checkbox"></span> <i class="flag flag-'.$v['flag'].'" ></i>'.$v['name']." ( {$v['own_name']} )".'</label>';
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
                        <label class="field prepend-icon">
                          <input name="verification" class="gui-input onlyNumber" placeholder="Проверочный код">
                          <label class="field-icon">
                            <i class="fa fa-shield"></i>
                          </label>
                        </label>
                        <label class="button btn-primary">3 + 5 = </label>
                      </div>
                      <!-- end .smart-widget section -->
                    </div>
                    <!-- end section -->

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<!-- Content -->
  <div class="section">
    <div class="section row br-a br-greyer mn mb15 p2">
      <div class="col-md-6 img-container pl1 mb1">
          <img id="full_site_image" src="" alt="Picture">
      </div>	  
      
      <div class="col-md-6 img-container pr1 mb1">
          <img id="thumb_site_image" src="" alt="Picture">
      </div>

    </div>
    <div class="row">
      <div class="col-md-9 docs-buttons">
        <!-- <h3 class="page-header">Toolbar:</h3> -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
              <span class="fa fa-arrows"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
        </div>
        
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="reset" title="Reset">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)">
              <span class="fa fa-refresh"></span>
            </span>
          </button>
          <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
              <span class="fa fa-upload"></span>
            </span>
          </label>
        </div>

        <div class="btn-group btn-group-crop">
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
              Get Cropped Canvas
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
              160&times;90
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
            <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
              320&times;180
            </span>
          </button>
        </div>

        <!-- Show the cropped image in modal -->
        <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
              </div>
              <div class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
              </div>
            </div>
          </div>
        </div><!-- /.modal -->
      </div><!-- /.docs-toggles -->
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
						
						
						
						
						
						
						
						

                  <!-- end .form-body section -->
                  <div class="panel-footer text-right">
                    <button type="submit" class="button btn-primary"> Отправить форму </button>
                  </div>
                </div>
				  <input type="hidden" name="ajax" value="1">
                  <!-- end .form-footer section -->
				  
				  

              </div>
                </form>

            </div>
            <!-- end: .admin-form -->

        </div>
        <!-- end: .tray-center -->
      <!-- End: Content -->
	  
	  <script>
		scripts.addOne(['initTypes', 'controls', 'addproject_form']);
	  </script>