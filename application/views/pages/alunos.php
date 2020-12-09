<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Alunos</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href="<?= base_url() ?>index.php/aluno/inserir" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Aluno</a>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Foto</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
        <?php foreach($alunos as $aluno) : ?>
          <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['endereco'] ?></td>
            <td><?= $aluno['foto'] ?></td>
						<td>
							<a href="<?= base_url() ?>index.php/aluno/editar/<?= $aluno['id'] ?>" class="btn btn-sm btn-warning">
								<i class="fas fa-pencil-alt"></i>
							</a>
							<a href="<?= base_url() ?>index.php/aluno/deletar/<?= $aluno['id'] ?>" class="btn btn-sm btn-danger">
								<i class="fas fa-trash-alt"></i>
							</a>
						</td>
          </tr>
        <?php endforeach;?>
			</tbody>
		</table>
		<?php if (!empty($this->session->flashdata('sucesso'))) : ?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Sucesso!</strong> ao salvar.
			</div>
		<?php endif; ?>
	</div>
</main>