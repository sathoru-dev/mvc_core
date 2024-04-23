<?php
    class views extends controller {

        public function login() {
            require PATH_VIEWS . 'login.php';
        }

        public function importar() {
            require PATH_VIEWS . 'importar.php';
        }

        public function errorBloqueado() {
            require PATH_VIEWS . 'errorPrivilegios.php';
        }

        private function obtenerNotificaciones() {
            $notificacionesModel = new notificaciones_model();
            $notificacionesModel = $notificacionesModel->obtenerNotificacionNav();
            $html = '';
            foreach ($notificacionesModel as $notificacion) {
                if( $notificacion['nivel'] == 'alto' ){
                    $icono = "<div class='dropdown-item-icon bg-danger text-white'>
                        <i class='fas fa-exclamation-triangle'></i>
                    </div>";
                } else {
                    $icono = "<div class='dropdown-item-icon bg-primary text-white'>
                        <i class='fas fa-exclamation'></i>
                    </div>";
                }
                $html .= "
                    <a href='#' id='notificacion_" . str_replace('=', '', $this->cifrar($notificacion['id_notificacion'])). "' onclick='detalleNotificacionNav(" . '"' .$this->cifrar($notificacion['id_notificacion']). '"' . ")' class='dropdown-item dropdown-item-unread'>
                        {$icono}
                        <div class='dropdown-item-desc'>
                            {$notificacion['titulo']}
                            <div class='time text-primary'>{$notificacion['fecha']}</div>
                        </div>
                    </a>
                ";
            }
            return $html;
        }

        /**Puedes Modificarlo */
        public function cargarVista( $archivo, $nombreArea, $variables=[] ) {
            $notificaciones = $this->obtenerNotificaciones();
            extract($variables, EXTR_OVERWRITE);
            echo '<!DOCTYPE html>
                <html lang="es">
                <head>';
                    require PATH_LAYOUTS."head.php";
            echo '</head>
                    <body>
                        <div id="app">
                            <div class="main-wrapper">';
                                require PATH_LAYOUTS."navbar.php";
                                require PATH_LAYOUTS."sidebar.php";
            echo '              <div class="main-content">';
                                    require PATH_VIEWS.$archivo.".php";
			echo '              </div>
		                    </div>
	                    </div>';
	                    require PATH_LAYOUTS."basescripts.php";
            echo '</body>
            </html>';
        }

        public function render_factura($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
	                require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."venta/comprobantes/factura.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }

        public function render_abonos($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
                    require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."venta/comprobantes/abonos.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }

        public function render_carga($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
	                require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."venta/comprobantes/carga.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }

        public function render_recibo_abono($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
	                require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."venta/comprobantes/recibo_abono.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }

        public function render_detalle_compra($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
	                require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."venta/comprobantes/compra.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }

        public function render_estadistica_compra($data=[], $nombreArea = '') {
            
            extract($data, EXTR_OVERWRITE);

            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
	                require PATH_LAYOUTS."head.php";
            echo  ' <body id="page-top" >
                        <div id="">';
            echo '          <div id="" class="d-flex flex-column">
                                <div id="content">';
            echo '                  <div class="container-fluid">';
                                        require PATH_VIEWS."estadisticas/estadisticas.php";
            echo '                  </div>
                                </div>';
            echo '          </div>
                        </div>';
                        

                        echo "<script src=".$this->base_url('public/js/jquery-3.3.1.min.js')."></script>";
                        echo "<script src='".$this->base_url('public/js/html2pdf.bundle.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/canvas2image.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/image_motor/html2canvas.min.js')."'></script>";
                        echo "<script src='".$this->base_url('public/js/descargar.js')."'></script>";


            echo '  </body>
                  </html>';
        }
    }
