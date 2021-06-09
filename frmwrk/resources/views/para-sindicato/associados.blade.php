@extends('template.layout')

@section('title') Sindicatos Industriais @endsection
@section('description')Sindicatos Industriais @endsection
@section('googlebot')Sindicatos Industriais @endsection
@section('keywords')Sindicatos Industriais @endsection

@section('conteudo')
    {{-- menu superior --}}
    @include('shared.menu-superior')
    <div class="bg-titulo">
        <div class="titulo">
            <ul>
                <li class="img">
                    <a href="para-sindicato">
                        <img src="{{url(env('PATH_ASSETS').'/shared/images/btn/home.svg')}}" alt="Inicial" title="Inicial" />
                    </a>
                </li>
                <li><a href="#">Sindicatos Industriais</a></li>
            </ul>
        </div>
    </div>

    <div class="bg-conteudo">
        <div class="conteudo pad-b-5">
            <div class="conteudo-texto">
                <p><strong>A Federação das Indústrias do Estado do Ceará é formada por 39 sindicatos industriais, que agem de maneira coordenada em função dos interesses dos setores econômicos que representam.<br>
                    </strong></p>
                <div class=" pad-tb-15 pull-right">
                    <label>filtrar por nome: </label>
                    <select class="target pad-03">
                        <option value="TODOS">Todos</option>
                        <option value="SINDUSCON">Sinduscon</option>
                        <option value="SINDICAJU">Sindicaju</option>
                        <option value="SINDBEBIDAS">Sindbebidas</option>
                        <option value="SINDROUPAS">Sindroupas</option>
                        <option value="SINDIMINERAIS">Sindiminerais</option>
                        <option value="SINDCERâMICA">Sindcerâmica</option>
                        <option value="SINDSERRARIAS">Sindserrarias</option>
                        <option value="SINDREDES">Sindredes</option>
                        <option value="SINDIóLEO">Sindióleo</option>
                        <option value="SINDCALF">Sindcalf</option>
                        <option value="SINDCONFEçõES">Sindconfeções</option>
                        <option value="SINDCOUROS">Sindcouros</option>
                        <option value="SINDIALGODãO">Sindialgodão</option>
                        <option value="SINDIBRITA">Sindibrita</option>
                        <option value="SINDSAL">Sindsal</option>
                        <option value="SINDITêXTIL">Sinditêxtil</option>
                        <option value="SINDFRIO">Sindfrio</option>
                        <option value="SINDGRáFICA">Sindgráfica</option>
                        <option value="SINDLACTICíNIO ">Sindlacticínio </option>
                        <option value="SINDCAFé">Sindcafé</option>
                        <option value="SINDMASSAS">Sindmassas</option>
                        <option value="SINDIEMBALAGENS">Sindiembalagens</option>
                        <option value="SINDIALIMENTOS">Sindialimentos</option>
                        <option value="SIMAGRAN">Simagran</option>
                        <option value="SINDMóVEIS">Sindmóveis</option>
                        <option value="SIMEC">Simec</option>
                        <option value="SINDPAN ">Sindpan </option>
                        <option value="SINDQUíMICA">Sindquímica</option>
                        <option value="SINDCARNAúBA">Sindcarnaúba</option>
                        <option value="SINDIPNEUS">Sindipneus</option>
                        <option value="SINDTRIGO">Sindtrigo</option>
                        <option value="SIFAVEC">Sifavec</option>
                        <option value="SINDIVERDE">Sindiverde</option>
                        <option value="SINDCALC">Sindcalc</option>
                        <option value="SINCAL">Sincal</option>
                        <option value="SINDINDúSTRIA">Sindindústria</option>
                        <option value="SINDIMEST">Sindimest</option>
                        <option value="SINDSORVETES">Sindsorvetes</option>
                        <option value="SINDIENERGIA">Sindienergia</option>
                    </select>
                </div>

                <div class="sindicato TODOS SINDUSCON">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sinduscon</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.fiec.org.br/sindicatos/sinduscon/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/sinduscon/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sinduscon.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DA CONSTRUÇÃO CIVIL DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteAndré Montenegro de Holanda</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Tomaz Acioly, 840 8º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3456.4050 Fax: 3456.4069 - sinduscon@sinduscon.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/sinduscon/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sinduscon.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DA CONSTRUÇÃO CIVIL DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - André Montenegro de Holanda</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Tomaz Acioly, 840 8º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3456.4050 Fax: 3456.4069 - sinduscon@sinduscon.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDICAJU">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindicaju</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindicaju.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindicaju.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicaju.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO AÇUCAR E DE DOCES E CONSERVAS ALIMENTÍCIAS DO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteFrancisco Assis Neto</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 2360 / Sala 404 -  Torre Quixadá - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3246.7062 / Fax: 3246.0497 -  sindicaju@sindicaju.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindicaju.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicaju.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO AÇUCAR E DE DOCES E CONSERVAS ALIMENTÍCIAS DO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - Francisco Assis Neto</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 2360 / Sala 404 -  Torre Quixadá - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3246.7062 / Fax: 3246.0497 -  sindicaju@sindicaju.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDBEBIDAS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindbebidas</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://sindbebidas.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://sindbebidas.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindibebidas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE ÁGUAS, CERVEJAS E BEBIDAS EM GERAL NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteClaúdio Sidrim Targino</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 3º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3268.1027 / 3421-5400 - R:1005 -  cachaca@colonial.ind.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://sindbebidas.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindibebidas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE ÁGUAS, CERVEJAS E BEBIDAS EM GERAL NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - Claúdio Sidrim Targino</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 3º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3268.1027 / 3421-5400 - R:1005 -  cachaca@colonial.ind.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDROUPAS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindroupas</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindroupas-ce.org.br/?st=index" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindroupas-ce.org.br/?st=index" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiroupas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE ALFAIATARIA E DE CONFECÇÃO DE ROUPAS DE HOMEM DE FORTALEZA</b></h5><p></p>
                                    <p>PresidenteFernando Sampaio Trajano</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.5474 – Fax: 3264.0738 -  sindroupas@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindroupas-ce.org.br/?st=index" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiroupas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE ALFAIATARIA E DE CONFECÇÃO DE ROUPAS DE HOMEM DE FORTALEZA</b></h5><p></p>
                                    <li>Presidente - Fernando Sampaio Trajano</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.5474 – Fax: 3264.0738 -  sindroupas@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIMINERAIS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindiminerais</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindminerais/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindminerais/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiminerais.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA EXTRAÇÃO DE MINERAIS NÃO METÁLICOS E DE DIAMANTES E PEDRAS PRECIOSAS, DE AREIAS, BARREIRAS E CALCÁRIOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcelo Vieira Quinderé</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.5462 - Sindicato - 3261.6589 -  sindminerais@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindminerais/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiminerais.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA EXTRAÇÃO DE MINERAIS NÃO METÁLICOS E DE DIAMANTES E PEDRAS PRECIOSAS, DE AREIAS, BARREIRAS E CALCÁRIOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcelo Vieira Quinderé</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.5462 - Sindicato - 3261.6589 -  sindminerais@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCERâMICA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcerâmica</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="javascript:;">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="javascript:;" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CAL E GESSO, OLARIA, LADRILHOS HIDRÁULICOS E PRODUTOS DE CIMENTO E CERÂMICA PARA CONSTRUÇÃO, DA CERÂMICA, DE LOUÇAS DE PO DE PEDRA, DA PORCELANA, DA LOUÇA DE BARRO, DE VIDROS E CRISTAIS OCOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcelo Guimarães Tavares</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.6589 / 3421.5462 -  sindiceramica-ce@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="javascript:;" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CAL E GESSO, OLARIA, LADRILHOS HIDRÁULICOS E PRODUTOS DE CIMENTO E CERÂMICA PARA CONSTRUÇÃO, DA CERÂMICA, DE LOUÇAS DE PO DE PEDRA, DA PORCELANA, DA LOUÇA DE BARRO, DE VIDROS E CRISTAIS OCOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcelo Guimarães Tavares</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.6589 / 3421.5462 -  sindiceramica-ce@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDSERRARIAS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindserrarias</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www1.sfiec.org.br/sindicatos/sindserrarias/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www1.sfiec.org.br/sindicatos/sindserrarias/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindserrarias.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE SERRARIAS, CARPINTARIAS, TANOARIAS, MADEIRAS COMPENSADAS E LAMINADAS DE FORTALEZA.</b></h5><p></p>
                                    <p>PresidenteJosé Agostinho Carneiro de Alcântara</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.5468 / 98702.0201 -  carmal@carmal.com.br / sindserrarias@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www1.sfiec.org.br/sindicatos/sindserrarias/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindserrarias.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE SERRARIAS, CARPINTARIAS, TANOARIAS, MADEIRAS COMPENSADAS E LAMINADAS DE FORTALEZA.</b></h5><p></p>
                                    <li>Presidente - José Agostinho Carneiro de Alcântara</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.5468 / 98702.0201 -  carmal@carmal.com.br / sindserrarias@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDREDES">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindredes</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindredes/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindredes/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE REDES NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteAluisio da Silva Ramalho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3466.5462 -  sindredes@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindredes/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE REDES NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Aluisio da Silva Ramalho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3466.5462 -  sindredes@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIóLEO">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindióleo</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindoleo/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindoleo/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE EXTRAÇÃO DE ÓLEOS VEGETAIS E ANIMAIS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteSérgio Brito de Castro Figueira</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>(85) 3421.1016  - sindoleos@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindoleo/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE EXTRAÇÃO DE ÓLEOS VEGETAIS E ANIMAIS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Sérgio Brito de Castro Figueira</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>(85) 3421.1016  - sindoleos@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCALF">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcalf</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.fiec.org.br/portalv2/sites/sindcalf/home.php?st=inicio" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/portalv2/sites/sindcalf/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicalf.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS DE FORTALEZA.</b></h5><p></p>
                                    <p>PresidenteJaime Bellicanta</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.2050 / 3421.5463 -  sindcalf@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/portalv2/sites/sindcalf/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicalf.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS DE FORTALEZA.</b></h5><p></p>
                                    <li>Presidente - Jaime Bellicanta</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.2050 / 3421.5463 -  sindcalf@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCONFEçõES">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindconfeções</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindconfeccoes.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindconfeccoes.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiconfeccoes.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CONFECÇÃO DE ROUPAS E CHÁPEUS DE SENHORA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcos Venicius Rocha Silva</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>sindconf@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindconfeccoes.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiconfeccoes.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CONFECÇÃO DE ROUPAS E CHÁPEUS DE SENHORA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcos Venicius Rocha Silva</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>sindconf@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCOUROS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcouros</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sfiec.org.br/portalv2/sites/sindicouros/home.php?st=inicio" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sfiec.org.br/portalv2/sites/sindicouros/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicouros.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE CURTIMENTO DE COUROS E PELES DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcia Oliveira Pinheiro</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1017 / 3264.3541 / 33074177 - sindicouros@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sfiec.org.br/portalv2/sites/sindicouros/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindicouros.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE CURTIMENTO DE COUROS E PELES DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcia Oliveira Pinheiro</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1017 / 3264.3541 / 33074177 - sindicouros@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIALGODãO">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindialgodão</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindalgodao/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindalgodao/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DA EXTRAÇÃO DE FIBRAS VEGETAIS E DO DESCAROÇAMENTO DO ALGODÃO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteAirton Carneiro</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1016 / 3224.6790 -  sindalgodao@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindalgodao/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DA EXTRAÇÃO DE FIBRAS VEGETAIS E DO DESCAROÇAMENTO DO ALGODÃO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Airton Carneiro</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1016 / 3224.6790 -  sindalgodao@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIBRITA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindibrita</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.fiec.org.br/sindicatos/sindibrita/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/sindibrita/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindibritas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE EXTRAÇÃO E BENEFICIAMENTO DE ROCHAS PARA BRITAGEM NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteAbdias Veras Neto</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3244.6476 / 8736.0953  -  sindibrita-ce@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/sindibrita/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindibritas.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE EXTRAÇÃO E BENEFICIAMENTO DE ROCHAS PARA BRITAGEM NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Abdias Veras Neto</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3244.6476 / 8736.0953  -  sindibrita-ce@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDSAL">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindsal</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindsal/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindsal/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA EXTRAÇÃO DO SAL NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteJosé Agostinho Carneiro de Alcântara</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421. 5468 -  carmal@carmal.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindsal/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA EXTRAÇÃO DO SAL NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - José Agostinho Carneiro de Alcântara</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421. 5468 -  carmal@carmal.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDITêXTIL">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sinditêxtil</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sinditextilce.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sinditextilce.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-textil.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE FIAÇÃO E TECELAGEM EM GERAL NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteKelly Whitehurst </p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.5456 -  sinditextil@sinditextilce.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sinditextilce.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-textil.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE FIAÇÃO E TECELAGEM EM GERAL NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - Kelly Whitehurst </li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.5456 -  sinditextil@sinditextilce.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDFRIO">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindfrio</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="javascript:void(0);">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="javascript:void(0);" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE FRIO E PESCA NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteElisa Maria Gradvolh Bezerra</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3224.8227 / 3466.1009 -  elisa@inace.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="javascript:void(0);" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE FRIO E PESCA NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - Elisa Maria Gradvolh Bezerra</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3224.8227 / 3466.1009 -  elisa@inace.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDGRáFICA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindgráfica</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindgrafica/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindgrafica/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindgrafica.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS GRÁFICAS NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteLuis Francisco Juaçaba Esteves</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421-5478 -  sindgrafica@sindgrafica.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindgrafica/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindgrafica.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS GRÁFICAS NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - Luis Francisco Juaçaba Esteves</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421-5478 -  sindgrafica@sindgrafica.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDLACTICíNIO ">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindlacticínio </span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindlacticinios/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindlacticinios/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE LACTICÍNIOS E PRODUTOS DERIVADOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteHenrique Girão Prata</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.6182 / 3421.1007  -  sindlacticinios@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindlacticinios/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DA INDÚSTRIA DE LACTICÍNIOS E PRODUTOS DERIVADOS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Henrique Girão Prata</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.6182 / 3421.1007  -  sindlacticinios@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCAFé">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcafé</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.sindcafeceara.com.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindcafeceara.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE TORREFAÇÃO E MOAGEM DE CAFÉ NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteJocely Dantas de Andrade Filho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1015 / 3261.5192  -  joceli@cafeserragrande.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindcafeceara.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE TORREFAÇÃO E MOAGEM DE CAFÉ NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Jocely Dantas de Andrade Filho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1015 / 3261.5192  -  joceli@cafeserragrande.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDMASSAS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindmassas</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.fiec.org.br/sindicatos/sindmassas/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/sindmassas/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE MASSAS ALIMENTÍCIAS E BISCOITO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteDaniel Mota Gutiérrez</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1015  -  sindmassas@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/sindmassas/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE MASSAS ALIMENTÍCIAS E BISCOITO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Daniel Mota Gutiérrez</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1015  -  sindmassas@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIEMBALAGENS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindiembalagens</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.fiec.org.br/sindicatos/sindiembalagens/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/sindiembalagens/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiembalagens.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE PAPEL, PAPELÃO, CELULOSE E EMBALAGENS EM GERAL NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteRoberto Romero Ramos</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1012  -  sindiembalagens@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/sindiembalagens/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindiembalagens.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE PAPEL, PAPELÃO, CELULOSE E EMBALAGENS EM GERAL NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Roberto Romero Ramos</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1012  -  sindiembalagens@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIALIMENTOS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">Sindialimentos</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindialimentos.org.br/index.php/home/associados" target="_black">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindialimentos.org.br/index.php/home/associados" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindialimentos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA ALIMENTAÇÃO E RAÇÕES BALANCEADAS NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <p>PresidenteAndré de Freitas Siqueira</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>(85) 3421.1015 / 3261.7159 - sindialimentos@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindialimentos.org.br/index.php/home/associados" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindialimentos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DA ALIMENTAÇÃO E RAÇÕES BALANCEADAS NO ESTADO DO CEARÁ</b></h5><p></p>
                                    <li>Presidente - André de Freitas Siqueira</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>(85) 3421.1015 / 3261.7159 - sindialimentos@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SIMAGRAN">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">simagran</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.fiec.org.br/sindicatos/simagran/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/simagran/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-simagran.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE MÁRMORES E GRANITOS DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteCarlos Rubens Araújo Alencar</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3224.4446 / 3421.1001  -  simagran@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/simagran/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-simagran.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE MÁRMORES E GRANITOS DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Carlos Rubens Araújo Alencar</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3224.4446 / 3421.1001  -  simagran@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDMóVEIS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindmóveis</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindmoveisce.com.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindmoveisce.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindmoveis.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO MOBILIÁRIO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteGeraldo Bastos Osterno Júnior</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.9769 / 3466.1008  - sindmoveis@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindmoveisce.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindmoveis.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO MOBILIÁRIO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Geraldo Bastos Osterno Júnior</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.9769 / 3466.1008  - sindmoveis@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SIMEC">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">simec</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.simec.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.simec.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-simec.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS METALÚRGICAS, MECÂNICA E DE MATERIAL ELÉTRICO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteJosé Sampaio de Souza Filho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3224.6020 / 3421.5455 / 8787.0320  -  simec@simec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.simec.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-simec.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS METALÚRGICAS, MECÂNICA E DE MATERIAL ELÉTRICO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - José Sampaio de Souza Filho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3224.6020 / 3421.5455 / 8787.0320  -  simec@simec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDPAN ">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindpan </span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindpan-ce.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindpan-ce.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindpan.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE PANIFICAÇÃO E CONFEITARIA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteLauro Martins de Oliveira Filho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.0052/3421.5477 - Fax - 3224.4500  -  sindpan@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindpan-ce.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindpan.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE PANIFICAÇÃO E CONFEITARIA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Lauro Martins de Oliveira Filho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.0052/3421.5477 - Fax - 3224.4500  -  sindpan@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDQUíMICA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindquímica</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindquimica.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindquimica.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindquimica.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS QUÍMICAS FARMACÊUTICAS E DA DESTILAÇÃO E REFINAÇÃO DE PETRÓLEO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcos Antônio Ferreira Soares</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3268.3426/3421.1019 -  sindquimica@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindquimica.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindquimica.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS QUÍMICAS FARMACÊUTICAS E DA DESTILAÇÃO E REFINAÇÃO DE PETRÓLEO NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcos Antônio Ferreira Soares</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3268.3426/3421.1019 -  sindquimica@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCARNAúBA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcarnaúba</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www.sindicarnauba.org.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindicarnauba.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindicarnauba.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS REFINADORAS DE CERA DE CARNAÚBA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteEdgar Gadelha Pereira Filho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3466.1004 / 3261.9145  -  sindicarnauba@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindicarnauba.org.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindicarnauba.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS REFINADORAS DE CERA DE CARNAÚBA NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Edgar Gadelha Pereira Filho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 4º andar, Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3466.1004 / 3261.9145  -  sindicarnauba@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIPNEUS">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindipneus</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div> <a href="http://www2.sfiec.org.br/portal/sindipneus/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindipneus/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindipneus.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE RECAUCHUTAGEM E DE PRESTAÇÃO DE SERVIÇOS E REFORMA DE PNEUS E SIMILARES NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteCarlos Alberto Verríssimo de Oliveira</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1017  - vteixeira@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindipneus/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindipneus.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE RECAUCHUTAGEM E DE PRESTAÇÃO DE SERVIÇOS E REFORMA DE PNEUS E SIMILARES NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Carlos Alberto Verríssimo de Oliveira</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1.980 / 3º andar Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1017  - vteixeira@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDTRIGO">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindtrigo</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www2.sfiec.org.br/portal/sindtrigo/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindtrigo/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO TRIGO NOS ESTADOS DO PARÁ, PARAÍBA, CEARÁ E RIO GRANDE DO NORTE.</b></h5><p></p>
                                    <p>PresidenteJosé Fabio Ferreira Gomes Filho</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Rua: Benedito Macedo, 77/5º andar – Cais do Porto  - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3263.1430 / 4009.3599 - FAX: 4009.3582  -  sindtrigo@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindtrigo/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DO TRIGO NOS ESTADOS DO PARÁ, PARAÍBA, CEARÁ E RIO GRANDE DO NORTE.</b></h5><p></p>
                                    <li>Presidente - José Fabio Ferreira Gomes Filho</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Rua: Benedito Macedo, 77/5º andar – Cais do Porto  - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3263.1430 / 4009.3599 - FAX: 4009.3582  -  sindtrigo@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SIFAVEC">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sifavec</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www2.sfiec.org.br/portal/sifavec/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sifavec/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DOS FABRICANTES DE VEÍCULOS ESPECIAIS DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteVanildo Lima Marcelo</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Rua: Estevão de Campos, 1200 - Barra do Ceará   - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3237.0730 / Fax: 3242.9033  -  fibravan@fibravan.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sifavec/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DOS FABRICANTES DE VEÍCULOS ESPECIAIS DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Vanildo Lima Marcelo</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Rua: Estevão de Campos, 1200 - Barra do Ceará   - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3237.0730 / Fax: 3242.9033  -  fibravan@fibravan.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIVERDE">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindiverde</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www1.sfiec.org.br/sindicatos/sindiverde/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www1.sfiec.org.br/sindicatos/sindiverde/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindverde.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS EMPRESAS DE RECICLAGEM DE RESÍDUOS SÓLIDOS DOMÉSTICOS E INDUSTRIAIS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMarcos Augusto Nogueira de Alburquerque</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 - Aldeota - 3º andar - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3421.1020 - 3224.9400  -  sindiverde@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www1.sfiec.org.br/sindicatos/sindiverde/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindverde.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS EMPRESAS DE RECICLAGEM DE RESÍDUOS SÓLIDOS DOMÉSTICOS E INDUSTRIAIS NO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Marcos Augusto Nogueira de Alburquerque</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 - Aldeota - 3º andar - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3421.1020 - 3224.9400  -  sindiverde@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDCALC">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindcalc</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.fiec.org.br/sindicatos/sindcalc/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.fiec.org.br/sindicatos/sindcalc/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS DE CRATO</b></h5><p></p>
                                    <p>PresidenteAnna Gabriela Holanda de Morais</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Rua: Bárbara de Alencar, 789 - Sala 03 – Centro - Crato-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>(88)3523.2900 -  Fax -  (88)3523.2610  - </p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.fiec.org.br/sindicatos/sindcalc/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS DE CRATO</b></h5><p></p>
                                    <li>Presidente - Anna Gabriela Holanda de Morais</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Rua: Bárbara de Alencar, 789 - Sala 03 – Centro - Crato-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>(88)3523.2900 -  Fax -  (88)3523.2610  - </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINCAL">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sincal</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www2.sfiec.org.br/portal/sincal/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sincal/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS, BOLSAS, CINTOS, LUVAS E MATERIAL DE SEGURANÇA E MEDICINA DO TRABALHO DE SOBRAL.</b></h5><p></p>
                                    <p>PresidenteMarcos Aurélio Strada</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Pimentel Gomes, 214 – Alto da Expectativa - Sobral-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>(88) 3613.1001 - 3613.1089  - sincalsob@gmail.com</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sincal/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/todos.png" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS, BOLSAS, CINTOS, LUVAS E MATERIAL DE SEGURANÇA E MEDICINA DO TRABALHO DE SOBRAL.</b></h5><p></p>
                                    <li>Presidente - Marcos Aurélio Strada</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Pimentel Gomes, 214 – Alto da Expectativa - Sobral-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>(88) 3613.1001 - 3613.1089  - sincalsob@gmail.com</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDINDúSTRIA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindindústria</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.sfiec.org.br/portalv2/sites/sindindustria/home.php?st=inicio" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sfiec.org.br/portalv2/sites/sindindustria/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindindustria.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS E VESTUÁRIOS DE JUAZEIRO DO NORTE E REGIÃO.</b></h5><p></p>
                                    <p>PresidenteAntônio Barbosa Mendoça</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Leão Sampaio, 839 - KM 01 - Triângulo  - Juazeiro do Norte-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>(88) 3571-2003  - (88) 3571-2010  - diretoria@sindindustria.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sfiec.org.br/portalv2/sites/sindindustria/home.php?st=inicio" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindindustria.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE CALÇADOS E VESTUÁRIOS DE JUAZEIRO DO NORTE E REGIÃO.</b></h5><p></p>
                                    <li>Presidente - Antônio Barbosa Mendoça</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Leão Sampaio, 839 - KM 01 - Triângulo  - Juazeiro do Norte-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>(88) 3571-2003  - (88) 3571-2010  - diretoria@sindindustria.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIMEST">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindimest</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www2.sfiec.org.br/portal/sindimest/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www2.sfiec.org.br/portal/sindimest/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindimest.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS E EMPRESAS DE INSTALAÇÃO, OPERAÇÃO E MANUTENÇÃO DE REDES, EQUIPAMENTOS E SISTEMAS DE TELECOMUNICAÇÃO DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidentePedro Alfredo Silva Neto</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Rua: Damasceno Girão, 1890 - Jardim América   - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>32624908 /99840960</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www2.sfiec.org.br/portal/sindimest/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindimest.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS E EMPRESAS DE INSTALAÇÃO, OPERAÇÃO E MANUTENÇÃO DE REDES, EQUIPAMENTOS E SISTEMAS DE TELECOMUNICAÇÃO DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Pedro Alfredo Silva Neto</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Rua: Damasceno Girão, 1890 - Jardim América   - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>32624908 /99840960</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDSORVETES">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">sindsorvetes</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.sindsorvetes.com.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindsorvetes.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindsorvetes.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE SORVETES DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidenteMiriam Silva Pereira </p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 - Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i> 4141.3733 / 3421.5495  - E-mail : sindsorvetes@sindsorvetes.com.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindsorvetes.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/logo-sindsorvetes.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS INDÚSTRIAS DE SORVETES DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Miriam Silva Pereira </li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980 - Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i> 4141.3733 / 3421.5495  - E-mail : sindsorvetes@sindsorvetes.com.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="sindicato TODOS SINDIENERGIA">
                    <div class="container all">
                        <div class="grid-12 border-gray heal pad-box">
                            <div class="grid-06 pointer">
                                <div class="icone plus-ico screen-desktop"></div>
                                <span class=" line-35 toupper">Sindienergia</span>
                            </div>
                            <div class="grid-06 text-right pointer">
                                <span class="line-35"><div class="globe-ico screen-desktop"></div><a href="http://www.sindienergiace.com.br/" target="_blank">Visite o site</a></span>
                            </div>
                        </div>
                        <!---->
                        <div class="container msn">

                            <!--Somente Celular-->
                            <div class="grid-12 screen-mobil">
                                <div class="text-center"><a href="http://www.sindienergiace.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindienergia.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a></div>
                                <div class="grid-12 pad-l-2">
                                    <p></p><h5><b class="font-s-1">SINDICATO DAS EMPRESAS PRESTADORAS DE SERVIÇOS DO SETOR ELÉTRICO DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <p>PresidentePresidente: Elias Sousa do Carmo</p>
                                    <p><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980  4º andar  - Aldeota - Fortaleza-Ce</p>
                                    <p><i class="fa fa-phone screen-desktop"></i>3261.9182 – 3261.3711   - sindienergia@sfiec.org.br</p>
                                </div>
                            </div>

                            <!--Somente Desktop-->
                            <div class="grid-03 screen-desktop">
                                <a href="http://www.sindienergiace.com.br/" target="_blank"><img src="http://www1.sfiec.org.br/sites/struc-basic-2015/style/imagens/sindicatos/sindienergia.jpg" alt="Sindicatos" "="" class="max-w-10 min-w-6"></a>
                            </div>
                            <div class="grid-09 pad-l-2 screen-desktop">
                                <ul class="list-clear"><h5><b class="font-s-1">SINDICATO DAS EMPRESAS PRESTADORAS DE SERVIÇOS DO SETOR ELÉTRICO DO ESTADO DO CEARÁ.</b></h5><p></p>
                                    <li>Presidente - Presidente: Elias Sousa do Carmo</li>
                                    <li><i class="fa fa-map-marker screen-desktop"></i>Av. Barão de Studart, 1980  4º andar  - Aldeota - Fortaleza-Ce</li>
                                    <li><i class="fa fa-phone screen-desktop"></i>3261.9182 – 3261.3711   - sindienergia@sfiec.org.br</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            @include('para-sindicato.menu-lateral-direita')
        </div>
    </div>



@endsection