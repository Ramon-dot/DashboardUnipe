<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/public/css/TelaCadastro/style.css" rel="stylesheet" >
</head>
<body>
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-10">
                <div class="form-container p-4">
                    <div class="breadcrumb-nav">Início . Cliente . Cadastro</div>
                    
                    <div class="page-header">
                        <svg class="user-icon" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        <h1 class="h4 mb-0">Cadastro</h1>
                    </div>

                    <form id="cadastroForm">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h3 class="section-title">Dados de login</h3>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-6">
                                            <label for="senha" class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="senha" name="senha" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="confirmarSenha" class="form-label">Confirmar senha</label>
                                            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <h3 class="section-title">Dados Pessoais</h3>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="nome" name="nome" required>
                                        </div>
                                        <div class="col-6">
                                            <label for="sobrenome" class="form-label">Sobrenome</label>
                                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tipoPessoa" class="form-label">Tipo de pessoa</label>
                                        <select class="form-select" id="tipoPessoa" name="tipoPessoa">
                                            <option value="Física" selected>Física</option>
                                            <option value="Jurídica">Jurídica</option>
                                        </select>
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="cpf" class="form-label">CPF</label>
                                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                                        </div>
                                        <div class="col-6">
                                            <label for="rg" class="form-label">RG</label>
                                            <input type="text" class="form-control" id="rg" name="rg">
                                        </div>
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="dataNascimento" class="form-label">Data de nascimento</label>
                                            <input type="date" class="form-control" id="dataNascimento" name="dataNascimento">
                                        </div>
                                        <div class="col-6">
                                            <label for="genero" class="form-label">Gênero</label>
                                            <select class="form-select" id="genero" name="genero">
                                                <option value="Masculino" selected>Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="ondeConheceu" class="form-label">Onde nos conheceu</label>
                                        <select class="form-select" id="ondeConheceu" name="ondeConheceu">
                                            <option value="Instagram" selected>Instagram</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Google">Google</option>
                                            <option value="Indicação">Indicação</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h3 class="section-title">Dados de correspondência</h3>

                                    <div class="mb-3">
                                        <label for="nomeEndereco" class="form-label">Nome do endereço (ex: Casa, Trabalho)</label>
                                        <select class="form-select" id="nomeEndereco" name="nomeEndereco">
                                            <option value="Casa" selected>Casa</option>
                                            <option value="Trabalho">Trabalho</option>
                                            <option value="Outros">Outros</option>
                                        </select>
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="cep" class="form-label">CEP</label>
                                            <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
                                        </div>
                                        <div class="col-6">
                                            <label for="estado" class="form-label">Estado</label>
                                            <select class="form-select" id="estado" name="estado">
                                                <option value="">Selecione seu estado</option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="cidade" class="form-label">Cidade</label>
                                            <input type="text" class="form-control" id="cidade" name="cidade">
                                        </div>
                                        <div class="col-6">
                                            <label for="bairro" class="form-label">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" name="bairro">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="endereco" class="form-label">Endereço</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco">
                                    </div>

                                    <div class="row g-3 mb-3">
                                        <div class="col-6">
                                            <label for="numero" class="form-label">Número</label>
                                            <input type="text" class="form-control" id="numero" name="numero">
                                        </div>
                                        <div class="col-6">
                                            <label for="complemento" class="form-label">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="referencia" class="form-label">Referência</label>
                                        <input type="text" class="form-control" id="referencia" name="referencia">
                                    </div>

                                    <div class="mb-4">
                                        <label for="telefone" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-cadastrar">
                                        CADASTRAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/TelaCadastro/script.js"></script>
</body>
</html>
