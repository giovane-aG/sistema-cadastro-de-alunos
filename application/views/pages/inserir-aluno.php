    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cadastrar Aluno</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

			<div class="col-md-12">
				<form enctype="multipart/form-data" action="<?= base_url() ?>aluno/salvarAluno" method="post">
					<div class="col-md-6">
						<div class="form-group">
							<label for="name">Nome</label>
							<input type="text" class="form-control" name="nome" id="name" placeholder="Name" value="">
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="description">Endereço</label>
							<input name="endereco" id="description" class="form-control"></input>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="category">Foto</label>
							<input type="file" class="form-control" name="foto" id="category" placeholder="Category" value="">
						</div>
					</div>
					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
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