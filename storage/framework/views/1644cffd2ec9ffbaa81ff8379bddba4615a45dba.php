<?php $__env->startSection('title'); ?>
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
&middot; Create Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(url('/css/products.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/global.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/css/print.css')); ?>">
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Open+Sans');
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##
<script src="<?php echo e(URL::asset ('/js/createProductForm.js')); ?>" defer></script>  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    eBaw &middot; online shopping
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="mx-auto" id="Criar_Prod_Main_Container" style="margin-top:30px;">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br />
        <?php endif; ?>

        <form action="<?php echo e(url('products/create')); ?>" method="post"  role="form" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?> 
            <br/>
                <h1 class="mb-4">Criar venda</h1>
                    <div class="form-group">
                        <?php echo csrf_field(); ?>
                            <label for="titulo">Titulo *  
                            </label> 
                            <div class="row">
                                <div class="col-sm-8">
                                <input type="text" class="form-control" id="titulo" aria-describedby="tituloProduto" name="nameProduct" 
                                placeholder="Titulo do Produto" required data-toggle="tooltip" data-placement="left" title="T??tulo do Produto">
                            </div>
                                <div class="col-sm-4">
                                    <h4>
                                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                        data-content="Refira a marca, o modelo e as mais importantes caracter??sticas"></i>
                                    </h4>
                                </div>
                            
                                </div>
                              </div>
                            
                            <div class="container">
                        
                    </div>

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary active" data-toggle="tooltip" data-placement="left" title="Usado">
                        <input type="radio" name="isNew" id="usado" autocomplete="off" value="false"> Usado
                    </label>
                    <label class="btn btn-outline-primary" data-toggle="tooltip" data-placement="left" title="Novo">
                        <input type="radio" name="isNew" id="novo" autocomplete="off" value="true" > Novo
                    </label>
                <div class="container">
                    <h4>
                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                        data-content="?? considerado um produto novo, todo o produto que vem embalado da f??brica. Se n??a for este o caso, escolha usado"></i>
                    </h4>
                </div>

                </div>
                <br/>
                <br/>

                <div class="form-group mb-3">
                    <label for="CategoriaSelect">Categoria *</label>
                    <div class="row">
                        <div class="col-sm-8">
            
                    <select class="custom-select" id="CategoriaSelect" style="border-radius: 0;" name="category" required>
                        <option selected data-toggle="tooltip" data-placement="left" title="Clique para escolher a categoria">Escolha...</option>

                        <option value="antiques"  data-toggle="tooltip" data-placement="left" title="Antiguidades">Antiguidades</option>
                        <option value="art"  data-toggle="tooltip" data-placement="left" title="Artes">Artes</option>
                        <option value="crafts" data-toggle="tooltip" data-placement="left" title="Artesanato">Artesanato</option>
                        <option value="baby" data-toggle="tooltip" data-placement="left" title="Beb??s">Beb??s</option>
                        <option value="healthBeauty" data-toggle="tooltip" data-placement="left" title="Beleza">Beleza</option>
                        <option value="toys"  data-toggle="tooltip" data-placement="left" title="Brinquedos">Brinquedos</option>
                        <option value="cars"  data-toggle="tooltip" data-placement="left" title="Carros">Carros</option>    
                        <option value="pottery"  data-toggle="tooltip" data-placement="left" title="Cer??mica">Cer??mica</option>
                        <option value="collecting"  data-toggle="tooltip" data-placement="left" title="Colec????o">Colec????o</option>
                        <option value="comics"  data-toggle="tooltip" data-placement="left" title="Comics">Comics</option>
                        <option value="computers" data-toggle="tooltip" data-placement="left" title="Computadores">Computadores</option>
                        <option value="sports"  data-toggle="tooltip" data-placement="left" title="Desporto">Desporto</option>
                        <option value="electronics"  data-toggle="tooltip" data-placement="left" title="Electrodom??sticos">Electrodom??sticos</option>
                        <option value="philately" data-toggle="tooltip" data-placement="left" title="Filatelia">Filatelia</option>
                        <option value="movies"  data-toggle="tooltip" data-placement="left" title="Filmes">Filmes</option>
                        <option value="photo"  data-toggle="tooltip" data-placement="left" title="Fotos">Fotos</option>
                        <option value="stationary"  data-toggle="tooltip" data-placement="left" title="Imoveis">Im??veis</option>
                        <option value="musicalInstruments" data-toggle="tooltip" data-placement="left" title="Instrumentos Musicais">Instrumentos Musicais</option>
                        <option value="houseGarden"  data-toggle="tooltip" data-placement="left" title="Jardinagem">Jardinagem</option>
                        <option value="coins"  data-toggle="tooltip" data-placement="left" title="Moedas">Moedas</option>
                        <option value="music"  data-toggle="tooltip" data-placement="left" title="M??sicas">M??sicas</option>
                        <option value="bargains"  data-toggle="tooltip" data-placement="left" title="Neg??cios">Neg??cios</option>
                        <option value="memorabiliaPortugal" data-toggle="tooltip" data-placement="left" title="Recorda????es">Recorda????es</option>
                        <option value="watches"  data-toggle="tooltip" data-placement="left" title="Rel??gios">Rel??gios</option>
                        <option value="clothingAndAccessories" data-toggle="tooltip" data-placement="left" title="Roupas e Acess??rios">Roupas e Acess??rios</option>
                        <option value="stamps" data-toggle="tooltip" data-placement="left" title="Selos">Selos</option>
                        <option value="travel" data-toggle="tooltip" data-placement="left" title="Viagens">Viagens</option>
                        <option value="videoGames"  data-toggle="tooltip" data-placement="left" title="VideoJogos">VideoJogos</option>
                    </select>

                </div>
                <div class="col-sm-4">
                    <h4>
                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                        data-content="Seleccione uma categoria, ou pelo menos a mais aproximada"></i>
                    </h4>
                </div>
            </div>


                </div>

                <div class="form-group">
                    <label>
                        Escolher Imagem *
                    </label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file" style="border-top-right-radius:0;border-bottom-right-radius:0;">
                                Procurar??? 
                                <input type="file" id="imgInp"  class="form-control" onchange="previewFile();" height="200" width="auto" name="photo" data-toggle="tooltip" data-placement="left" title="Escolher foto"/>
                               
                            </span>
                            <div class="row">
                                <div class="col-sm-10">
                    
                            <img id="imagePreview" src="<?php echo e(asset('sample.png')); ?>" height="200" width="auto" alt="Image preview">
                              <span class="text-danger"> <?php echo e($errors->first('photo')); ?></span>
                            </div>
                            <div class="col-sm-2">
                                <h4>
                                    <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                    data-content="Escolha uma foto do produto no seu sistemas de ficheiros. Extens??es .png .gif. At?? ao m??ximo de 2MB."></i>
                                </h4>
                            </div>
                        </div>    
                         </span>
                    </div>
                   
                </div>

                <div class="form-group">
                    <label for="DescricaoProduto">Descri????o do Produto *</label>
                    <div class="row">
                        <div class="col-sm-10">              
                            <textarea id="DescricaoProduto" class="form-control" aria-label="DescricaoProduto" required name="description" maxlength="1000" data-toggle="tooltip" data-placement="left" title="Descri????o do Produto"></textarea>
                        </div>
                        <div class="col-sm-2">
                            <h4>
                                <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                data-content="Descreva as caracter??sticas, as condi????es e especificidades do seu produto"></i>
                            </h4>
                        </div>
                    </div>
                </div>

                <br/>

                <!--    VENDA DIRETA | LEIL??O   -->
                <div class="container" id="sale-auction-tabs" style="padding-left: 0;">
                    <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: #f8f9fa;">
                        <li class="nav-item">
                            <a class="nav-link active" id="sale-tab" data-toggle="tab" href="#sale" role="tab" aria-controls="sale" aria-selected="true" data-toggle="tooltip" data-placement="left" title="Clickar par criar venda directa">Venda Direta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="auction-tab" data-toggle="tab" href="#auction" role="tab" aria-controls="auction" aria-selected="false" data-toggle="tooltip" data-placement="left" title="Clickar para criar leil??o">Leil??o</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="myTabContent">
                        <br/>
                        <div class="tab-pane fade" id="auction" role="tabpanel" aria-labelledby="auction-tab">
                            <div class="form-group">

                                <label for="LicitacaoBase" data-toggle="tooltip" data-placement="left" title="Licita????o Base">Licita????o Base (EUR) *</label>
                            
                                <div class="row">
                                    <div class="col-sm-10" >
                                        
                                        <input type="text" id="LicitacaoBase" class="form-control" 
                                                aria-label="Amount (to the nearest dollar)" 
                                                placeholder="Euros" 
                                                oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')" name="biddingBase">
                            
                                    </div>
                                    <div class="col-sm-2">
                                        <h4>
                                            <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                            data-content="Digite o pre??o inicial, pelo qual o leil??o vai iniciar"></i>
                                        </h4>
                                    </div>
                                    </div>
                            
                            
                            
                            </div>
                            <div class="form-group">
                                <label for="DataFinal" data-toggle="tooltip" data-placement="left" title="Data Final">Data final *</label>
                                <div class="row">
                                    <div class="col-sm-10">
            
                                
                                <input type="date" id="DataFinal" class="form-control" name="dateEndAuction">
                            
                            
                                </div>
                                <div class="col-sm-2">
                                    <h4>
                                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                        data-content="Indique a data em que o leil??o terminar??"></i>
                                    </h4>
                                </div>
                                </div>
                        
                            
                            
                            </div>
                            <div class="form-group">
                                <label for="HoraFinal" data-toggle="tooltip" data-placement="left" title="Hora Final">Hora final *</label>
                                <div class="row">
                                    <div class="col-sm-10">

                                    <input type="time" id="HoraFinal" class="form-control" name="hourEndAuction">
                                </div>
                                <div class="col-sm-2">
                                    <h4>
                                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                        data-content="Indique a hora em que o leil??o terminar??"></i>
                                    </h4>
                                </div>
                                </div>
            
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">

                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Clickar para finalizar a cria????o do leil??o">Criar Leilao</button>
                        </div>
                        <div class="col-sm-8">
                            <h4>
                                <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                data-content="Ao pressionar o bot??o ir?? publicar a sua venda, poer?? alterar alguns dados na ??rea do utilizador"></i>
                            </h4>
                        </div>
                        </div>
                       
                        </div>
                
                
                        <div class="tab-pane fade show active" id="sale" role="tabpanel" aria-labelledby="sale-tab">
                            <div class="form-group">
                                <label for="price" data-toggle="tooltip" data-placement="left" title="Pre??o">Pre??o (EUR) *</label>
                                <div class="row">
                                    <div class="col-sm-8">
                
                                        <input type="text" id="price" class="form-control" aria-label="Amount (to the nearest dollar)" 
                                                placeholder="Euros" 
                                                oninput="this.value=this.value.replace(/(?!([0-9]))./gmi,'')" 
                                                name="finalValue">
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>
                                            <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                            data-content="Insira o pre??o final de venda, este pre??o poder?? ser alterado na ??rea do utilizador"></i>
                                        </h4>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="form-group">
                                <label for="FinalDate" data-toggle="tooltip" data-placement="left" title="Data Final">Data final *</label>
                                <div class="row">
                                    <div class="col-sm-8">
                
                                <input type="date" id="FinalDate" class="form-control" name="dateEnd">
                            </div>
                            <div class="col-sm-4">
                                <h4>
                                    <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                    data-content="Seleccione o data em que a venda terminar??, no final a venda deixar?? de estar diponivel, mas poder?? reeditar a venda"></i>
                                </h4>
                            </div>
                        </div>
                   
                
                
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                
                                    <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Clicar para finalizar a cria????o da venda">Criar Venda</button>
                                </div>
                                <div class="col-sm-8">
                                    <h4>
                                        <i class="fa fa-question-circle form-info" aria-hidden="true" data-toggle="popover" data-placement="top" 
                                        data-content="Ap??s pressionar o bot??o o seu produto vai estar dispon??vel ao p??blico e pronto a receber coment??rios"></i>
                                    </h4>
                                </div>
                            </div>
                               
                        </div>
                    </div>
                    
                </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luis/git/A4S2/LBAW/lbaw2036/resources/views/pages/productForm.blade.php ENDPATH**/ ?>