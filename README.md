
## Sobre o Projeto

Criar um **CHECKOUT** para uma **PLATAFORMA** de **VENDAS ONLINE**

Este checkout será criado em PHP, utilizando a Framework Laravel

*O contexto deste projeto é mínimo no que diz respeito a operações de e-commerce e foca na efetivação do pagamento, portanto questões como logística, descontos e afins não serão levados em consideração na descrição e execução do projeto.*

# Requisitos

- Banco de dados Mysql
- Autenticação e Cadastro de Usuários
- Cadastro de Produtos
- Cadastro de Pedidos
- Checkout
- Api de **Paylivre** para efetivação dos pagamentos (anexar documentação)
- Criação de testes unitários para todas as regras de negócio

# Regras de negocio

## Cadastro de Usuários

Deverá possuir 2 tipos de cadastro. Um “Administrador” que será responsável por realizar o cadastro de produtos na plataforma, também poderá visualizar e gerenciar os pedidos de todos os usuários. Para o usuário “Padrão” este poderá apenas escolher os produtos desejados e realizar a compra na plataforma, em sua área restrita poderá ver os próprios pedidos.

Os dados básicos de cadastro de usuários são:

- Nome
- E-mail
- Telefone
- Endereço
- Data de nascimento
- CPF

## Cadastro de Produtos

Para o cadastro de produtos, deverá ser possível cadastrar as seguintes informações

- Nome do produto
- Descrição do produto
- Quantidade
- Preço de custo
- Preço de venda
- Foto principal

## Cadastro de Pedidos

O cadastro de pedidos ocorrerá durante o processo de checkout, uma vez que o cliente selecinar os produtos que deseja adquirir e realizar o pagamento. Será importante registrar para o Cadastro de Pedidos os **produtos que foram adquiridos**, o **cliente que comprou** assim como o **status do pagamento**.

## Checkout

Durante o checkout, o cliente deverá selecionar os produtos que deseja adquirir e definir a forma de pagamento - para efetivação de pagamento utilizaremos a solução da Paylivre. Após realizar o pagamento, o cliente deverá ser informado sobre o status do seu pagamento: sendo **Aprovado**, **Recusado** ou **Processando**.

### Atualização de status do pagamento

O sistema deverá possuir uma rotina para monitorar os pagamentos que estiverem sendo processados. Utilizaremos o serviço de webhook da Paylivre.

**Notificações**

- O cliente recebe um e-mail toda vez que um novo pedido é realizado
- O cliente recebe um e-mail toda vez que algum pedido sofre alteração de status

## Instalando o projeto

Abra o terminal e faça os seguintes comandos:

// Clonar o projeto
git clone https://github.com/tatmorenno/beacademy-devstart-jade.git

// Acessar a pasta do projeto
cd beacademy-devstart-jade

// Atualizar o composer
composer update

//Configurar arquivo .env
Vá até o arquivo .env.exemple e renomeie para .env
Insira usas credenciais de acesso ao banco de dados

// Gerar key
php artisan key:generate

// Iniciar projeto
php artisan serve

## Contribuintes 

