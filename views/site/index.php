<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'My Playlist';
?>
<div class="site-index">

    <div class="text-center m-b-lg">
        <h2><i class="fas fa-podcast"></i> My Playlist!</h2>
        <p class="lead">Create your songs, build your playlists and enjoy!!!</p>
    </div>

    <div class="body-content">

        <div class="box-round shadow-sm playlist">
            <div class="row">
                <div class="col-md-2">
                    <h4><small><i class="far fa-play-circle"></i></small> &nbsp;Playlist</h4>
                </div>
                <div class="col-md-10">
                    <button type="button" class="btn btn-sm btn-outline-dark float-right" data-toggle="modal" data-target="#modal_playlist"><i class="fas fa-plus-circle"></i> Criar Playlist</button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="box-round"> -->
                    <!-- </div> -->
                    <table id="playlistTable" class="table table-striped table-sm table-dark">
                        
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box-round">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Músicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Gêneros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Artistas</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-sm btn-outline-info float-right m-v-sm" data-toggle="modal" data-target="#modal_music"><i class="fas fa-plus-circle"></i> Adicionar música</button>
                                </div>
                            </div>
                            <div class="row">
                                <div id="musicList" class="col-md-12">

                                    <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        // 'filterModel' => $searchModel,
                                        'tableOptions' => ['class' => 'table table-striped table-sm'],
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],
                                            'name',
                                            'time',
                                            'genre_id',
                                            'artiste_id',
                                            ['class' => 'yii\grid\ActionColumn', 'template' => '<button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar" data-toggle="modal" data-target="#modal_music" data-id=""><i class="far fa-edit"></i></button>'],
                                        ],
                                    ]); ?>
                                    <!-- <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Música</th> <th>Duração (min)</th> <th>Gênero</th> <th>Artista</th> <th width="1%">Editar</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lost In Hollywood</td>
                                                <td>4:24</td>
                                                <td>Rock</td>
                                                <td>System Of A Down </td>
                                                <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar" data-toggle="modal" data-target="#modal_music" data-id="5"><i class="far fa-edit"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                            <br>
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nome do gênero</th>
                                        <th width="1%">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Folk</td>
                                        <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar"><i class="far fa-edit"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">
                            <br>
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Nome do artista</th>
                                        <th width="1%">Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bob Dylan</td>
                                        <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar"><i class="far fa-edit"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_playlist" tabindex="-1" role="dialog" aria-labelledby="modal_playlistLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_playlistLabel">Criar Playlist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <div class="form-group">
                        <label for="genre" class="col-form-label">Gênero:</label>
                        <select id="inputGenre" class="form-control">
                            <option value="1">Folk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="artiste" class="col-form-label">Artista:</label>
                        <select id="inputArtiste" class="form-control">
                            <option value="1">Bob Dylan</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                        <label class="form-check-label" for="exampleCheck1">Criar lista aleatória <i class="fas fa-random"></i></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" id="getPlaylist" class="btn btn-info">Gerar playlist</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal_music" tabindex="-1" role="dialog" aria-labelledby="modal_musicLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_musicLabel">Adicionar música</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/index.php?r=music/create">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <div class="row">
                        <div class="form-group col-md-8">
                            <label class="control-label" for="music-name">Nome da música:</label>
                            <input type="text" id="music-name" class="form-control" name="Music[name]" maxlength="75" aria-required="true" placeholder="Like a Rolling Stone">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label" for="music-name">Duração:</label>
                            <input type="time" id="music-time" class="form-control" name="Music[time]" maxlength="5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="artiste" class="control-label">Gênero:</label>
                                <select id="music-genre_id" name="Music[genre_id]" class="form-control">
                                    <option value="1">Folk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="artiste" class="control-label">Artista:</label>
                                <select id="music-artiste_id" name="Music[artiste_id]" class="form-control">
                                    <option value="1">Bob Dylan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer row">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-info">Salvar música</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>