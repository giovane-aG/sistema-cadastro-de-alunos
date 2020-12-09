    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<?php if(isset($aluno)) : ?>
					<h1 class="h2">Editar Aluno</h1>
				<?php else : ?>
					<h1 class="h2">Cadastrar Aluno</h1>
				<?php endif; ?>
      </div>

			<div class="col-md-12">
				<?php if(isset($aluno)) : ?>
					<form enctype="multipart/form-data" action="<?= base_url() ?>aluno/atualizarAluno/<?= $aluno['id'] ?>" method="post">
				<?php else : ?>
					<form enctype="multipart/form-data" action="<?= base_url() ?>aluno/salvarAluno" method="post">
				<?php endif; ?>

					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Nome</label>
							<input type="text" required class="form-control" name="nome" id="name" placeholder="Name" value="<?= isset($aluno) ? $aluno["nome"] : "" ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Endereço</label>
							<input type="text" name="endereco" required  id="description" class="form-control" value="<?= isset($aluno) ? $aluno["endereco"] : "" ?>"></input>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Foto</label>
							<input type="file" class="form-control" name="foto" id="category" placeholder="Category" value="<?= isset($aluno) ? $aluno["foto"] : "" ?>">
						</div>
					</div>
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="<?= base_url() ?>aluno" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>
    </main>
  </div>
</div>
<!-- 
	usar input file
	adicionar multipart form data enctype
	Pegar o caminho da foto e mover para view
	Guardar o caminho da foto dentro da pasta view no bd
 -->