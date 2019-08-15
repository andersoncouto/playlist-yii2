<?php

/* @var $this yii\web\View */

$this->title = 'My Playlist';
?>
<div class="site-index">

    <div class="text-center m-b-lg">
        <h2><i class="fas fa-podcast"></i> My Playlist!</h2>
        <p class="lead">Create your songs, build your playlists and enjoy!!!</p>
    </div>

    <div class="body-content">

        <div class="box-round shadow-sm">
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
                    <table class="table table-striped table-sm table-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Música</th>
                                <th>Duração (min)</th>
                                <th>Gênero</th>
                                <th>Artista</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lost In Hollywood</td>
                                <td>4:24</td>
                                <td>Rock</td>
                                <td>System Of A Down </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Old School Hollywood</td>
                                <td>6:05</td>
                                <td>Rock</td>
                                <td>System Of A Down </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lonely Day</td>
                                <td>4:44</td>
                                <td>Rock</td>
                                <td>System Of A Down </td>
                            </tr>
                        </tbody>
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
                                <div class="col-md-12">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <!-- <th>#</th> -->
                                                <th>Música</th>
                                                <th>Duração (min)</th>
                                                <th>Gênero</th>
                                                <th>Artista</th>
                                                <th width="1%">Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- <th scope="row">1</th> -->
                                                <td>Lost In Hollywood</td>
                                                <td>4:24</td>
                                                <td>Rock</td>
                                                <td>System Of A Down </td>
                                                <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar"><i class="far fa-edit"></i></button></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row">2</th> -->
                                                <td>Old School Hollywood</td>
                                                <td>6:05</td>
                                                <td>Rock</td>
                                                <td>System Of A Down </td>
                                                <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar"><i class="far fa-edit"></i></button></td>
                                            </tr>
                                            <tr>
                                                <!-- <th scope="row">3</th> -->
                                                <td>Lonely Day</td>
                                                <td>4:44</td>
                                                <td>Rock</td>
                                                <td>System Of A Down </td>
                                                <td><button type="button" class="btn btn-sm btn-default" title="Editar" alt="Editar"><i class="far fa-edit"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">...</div>
                        <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
                    <div class="form-group">
                        <label for="genre" class="col-form-label">Gênero:</label>
                        <select id="inputGenre" class="form-control">
                            <option selected>Todos os gêneros</option>
                            <option>Metal</option>
                            <option>Rock</option>
                            <option>Punk Rock</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="artiste" class="col-form-label">Artista:</label>
                        <select id="inputArtiste" class="form-control">
                            <option selected>Todos os artistas</option>
                            <option>Bob Dylan</option>
                            <option>System of a Down</option>
                            <option>Rolling Stones</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                        <label class="form-check-label" for="exampleCheck1">Criar lista aleatória <i class="fas fa-random"></i></label>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-info">Gerar playlist</button>
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
                <form>
                    <div class="row">
                        <div class="form-group col-md-9">
                            <label for="name" class="col-form-label">Nome da música:</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Like a Rolling Stone">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="name" class="col-form-label">Duração:</label>
                            <input type="time" class="form-control" id="inputName" placeholder="00:00">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="artiste" class="col-form-label">Gênero:</label>
                                <select id="inputArtiste" class="form-control">
                                    <option selected>Todos os gêneros</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="artiste" class="col-form-label">Artista:</label>
                                <select id="inputArtiste" class="form-control">
                                    <option selected>Todos os artistas</option>
                                    <option>Bob Dylan</option>
                                    <option>System of a Down</option>
                                    <option>Rolling Stones</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-info">Salvar música</button>
            </div>
        </div>
    </div>
</div>