

// Construir um formulário HTML contendo os seguintes campos:
// - Nome do Produto (minimo 2, máximo 100 caracteres)
// - Marca (minimo 2, máximo 20 caracteres)
// - Quantidade (mínimo 0, máximo 100)
// - Preço (mínimo 0, sem máximo)

// No HTML deve haver um botão 'Incluir'. Esse botão deve ter a seguinte finalidade:
// - Verificar se todos os requisitos de mínimos e máximos (limites) foram atendidos
// - Se não foram, destacar em vermelho os campos do formulário que contém erros de limite
// - Se foram atendidos, apagar os dados do formulário e acrescentar um objeto contendo os dados dentro de
//   um array chamado 'produtos' e atualizar uma tabela html logo abaixo do formulário que imprime
//   todos os dados do 'produtos'.