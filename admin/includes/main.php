<?php
require_once('/xampp/htdocs/hastalatumba_pre-alpha/controller/dashController.php');
$controller = new dashController();
$res = $controller->dashDataHome();

?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row row--grid">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Dashboard</h2>

                    <a href="add-item.html" class="main__title-link">add item</a>
                </div>
            </div>
            <!-- end main title -->

            <!-- stats -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats">
                    <span>Total Visitas </span>
                    <p>-</p>
                    <i class="fas fa-signal"></i>
                </div>
            </div>
            <!-- end stats -->

            <!-- stats -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats">
                    <span>Historias</span>
                    <p><?php echo $res['confeciones'] ?></p>
                    <i class="fas fa-book-reader"></i>
                </div>
            </div>
            <!-- end stats -->

            <!-- stats -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats">
                    <span>Comentarios</span>
                    <p>-</p>
                    <i class="fas fa-comments"></i>
                </div>
            </div>
            <!-- end stats -->

            <!-- stats -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats">
                    <span>Miembros</span>
                    <p><?php echo $res['usuarios'] ?></p>
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <!-- end stats -->

            <!-- dashbox -->
            <div class="col-12 col-xl-6">
                <div class="dashbox">
                    <div class="dashbox__title">
                        <h3><i class="icon ion-ios-trophy"></i> ültimas Historias</h3>

                        <div class="dashbox__wrap">
                            <a class="dashbox__refresh" href="#"><i class="icon ion-ios-refresh"></i></a>
                            <a class="dashbox__more" href="historias/">Ver todas</a>
                        </div>
                    </div>

                    <div class="dashbox__table-wrap">
                        <table class="main__table main__table--dash">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TÍTULO</th>
                                    <th>CATEGORIA</th>
                                    <th>ME GUSTA</th>
                                    <th>COMENTARIOS </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($res['confecionesLastFive'] as $data){
                                ?>
                                <tr>
                                    
                                    <td>
                                        <div class="main__table-text"><?php echo $data->id_confecion ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><a href="#" class="texto-truncado"><?php echo $data->titulo ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $data->categoria ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">-</div>
                                    </td>
                                    <td>
                                        <div class="main__table-text">-</div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end dashbox -->

            <!-- dashbox -->
            <div class="col-12 col-xl-6">
                <div class="dashbox">
                    <div class="dashbox__title">
                        <h3><i class="icon ion-ios-film"></i>USUARIOS NUEVOS</h3>

                        <div class="dashbox__wrap">
                            < <a class="dashbox__more" href="">Ver Todos</a>
                        </div>
                    </div>

                    <div class="dashbox__table-wrap">
                        <table class="main__table main__table--dash">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PSEUDONIMO</th>
                                    <th>FECHA REGISTRO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($res['usuariosLastFive'] as $data){
                                ?>
                                <tr>
                                    <td>
                                        <div class="main__table-text"><?php echo $data->id_usuario ?></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text texto-truncado"><a href="#"><?php echo $data->alias ?></a></div>
                                    </td>
                                    <td>
                                        <div class="main__table-text"><?php echo $data->fecha_registro ?></div>
                                    </td>
                                </tr>

                                <?php
                                }

                                ?>
                                


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end dashbox -->
        </div>
    </div>
</main>
<!-- end main content -->