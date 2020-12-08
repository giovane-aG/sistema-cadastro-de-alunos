<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dashboard</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url('') ?>alunos/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Aluno</a>
			</div>
		</div>
	</div>

	
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2 class="h2">Alunos</h2>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
        <?php foreach($alunos as $aluno) : ?>
          <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['endereco'] ?></td>
            <td><?= $aluno['foto'] ?></td>
          </tr>
        <?php endforeach;?>
        
			</tbody>
		</table>
	</div>
</main>