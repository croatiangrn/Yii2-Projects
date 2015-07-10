<?php
use yii\helpers\Html;
$this->title = 'Edit user informations';
?>


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            <?= $this->title ?>
                        </h1>
                    </div>

                    <div class="col-lg-6">
                        <h1 class="page-header">
                            My personal info's (On site!)
                        </h1>
                    </div>
                </div>


                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>Username:</label>
                                <p class="form-control-static"><?= $mKorisnik['username'] ?></p>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" value="" type="password">
                            </div>

                            <div class="form-group">
                                <label>Repeat password</label>
                                <input class="form-control" value="" type="password">
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" value="<?= $mKorisnik['email']; ?>" type="email">
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>

                    <div class="col-lg-6">

                        <form role="form">

                            <div class="form-group">
                                <label>General informations</label>
                                <textarea class="form-control" rows="20" cols="180">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut viverra tellus. Donec pellentesque ut tortor sit amet varius. Donec mollis id sem eget aliquam. Nulla orci magna, ornare et turpis ac, egestas pretium ex. Fusce eu ligula massa. Aliquam erat volutpat. Aenean nec volutpat nulla, ut vestibulum ex. Aliquam ac eros a ex molestie bibendum. Pellentesque vitae tortor purus.

Nullam sed turpis vehicula ipsum pretium volutpat et ut justo. Maecenas vel volutpat elit. Pellentesque sagittis sapien varius sapien posuere sollicitudin. Nulla eget sapien nec enim tincidunt ultricies nec vel quam. Vestibulum a justo augue. Vestibulum blandit laoreet lacus, ac aliquam magna rhoncus nec. Sed sit amet cursus massa. Maecenas rhoncus, ex id malesuada lacinia, massa quam aliquet lectus, eget aliquet ligula arcu ut erat. Nunc lorem erat, aliquam non orci ut, imperdiet vehicula nulla. Curabitur sollicitudin consectetur quam eget feugiat. Nam ullamcorper quam eu ligula blandit imperdiet. Proin quis metus quis nibh maximus consequat. Suspendisse pulvinar scelerisque nulla, vitae dignissim ipsum rutrum in. Sed sit amet elit faucibus, aliquam est et, pharetra turpis. Morbi condimentum malesuada erat, eu aliquam tellus malesuada quis. Donec sed turpis sit amet lorem convallis interdum tincidunt eu nisi.

Vivamus eget magna ex. Nunc interdum diam eget risus vestibulum elementum. Nunc maximus eros id augue sodales porta. Sed et orci et lorem mattis laoreet vel eu metus. Fusce sagittis risus eget odio dignissim aliquet. Maecenas quis justo et mi consectetur finibus. Maecenas sed mauris lectus.

Nulla fermentum hendrerit quam eget varius. Aliquam ante velit, bibendum id lorem at, pellentesque mollis ipsum. Phasellus ac purus pharetra, auctor urna sed, hendrerit lorem. Nam eu dolor turpis. Aliquam vitae dignissim libero, eu rutrum est. Donec vehicula tortor a velit ultrices iaculis. Cras malesuada tempor mollis. Phasellus tortor massa, vestibulum et ipsum eget, gravida rhoncus libero. Sed finibus dignis...
                                </textarea>

                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->