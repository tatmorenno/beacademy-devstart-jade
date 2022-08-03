<p align="center">
   <img alt="top" src="https://ik.imagekit.io/tatmorenno/paylivre_2_lt4Dw-2.png?ik-sdk-version=javascript-1.4.3&updatedAt=1659477671216" height="100" weight="300"/><br><br>
   <img src="https://ik.imagekit.io/tatmorenno/Captura_de_Tela_2022-08-02_a%CC%80s_18.48.05_-1htspY8C.png?ik-sdk-version=javascript-1.4.3&updatedAt=1659476934266"/>
</p>

# 🖥 Sobre o Projeto

**PLATAFORMA** de **VENDAS ONLINE** com **CHECKOUT** integrado.

*O contexto deste projeto é mínimo no que diz respeito a operações de e-commerce e foca na efetivação do pagamento, portanto questões como logística, descontos e afins não serão levados em consideração na descrição e execução do projeto.*


# 💻 Tecnologias

- PHP
- Laravel
- Banco de dados MySql

# ✅ Features

- Autenticação e Cadastro de Usuários
- Cadastro de Produtos
- Cadastro de Pedidos
- Checkout
- Api de **Paylivre** para efetivação dos pagamentos (anexar documentação)
- Criação de testes unitários para todas as regras de negócio

## 👩🏻‍💻 Cadastro de Usuários

🔐 **Administrador**: será responsável por realizar o cadastro de produtos na plataforma; também poderá visualizar e gerenciar os pedidos de todos os usuários.

🔒 **Usuário Padrão**: este poderá apenas escolher os produtos desejados e realizar a compra na plataforma, em sua área restrita poderá ver os próprios pedidos.

Dados básicos de cadastro de usuários:

- Nome;
- E-mail;
- Telefone;
- Endereço;
- Data de nascimento;
- CPF.

## 📱 Cadastro de Produtos

Para o cadastro de produtos, deverá ser possível cadastrar as seguintes informações:

- Nome do produto
- Descrição do produto
- Quantidade
- Preço de custo
- Preço de venda
- Foto principal

## 🛒 Cadastro de Pedidos

O cadastro de pedidos ocorrerá durante o processo de checkout, uma vez que o cliente selecinar os produtos que deseja adquirir e realizar o pagamento. Será importante registrar para o Cadastro de Pedidos os **produtos que foram adquiridos**, o **cliente que comprou** assim como o **status do pagamento**.

## 💳 Checkout

Durante o checkout, o cliente deverá selecionar os produtos que deseja adquirir e definir a forma de pagamento - para efetivação de pagamento utilizaremos a solução da Paylivre. Após realizar o pagamento, o cliente deverá ser informado sobre o status do seu pagamento: sendo **Aprovado**, **Recusado** ou **Processando**.

### 🧾 Atualização de status do pagamento

O sistema deverá possuir uma rotina para monitorar os pagamentos que estiverem sendo processados. Utilizaremos o serviço de webhook da Paylivre.

**Notificações**

- O cliente recebe um e-mail toda vez que um novo pedido é realizado
- O cliente recebe um e-mail toda vez que algum pedido sofre alteração de status

# 🧑🏻‍💻 Instalando o projeto

Para rodar este projeto é necessário ter instalado Git e PHP.

Abra o terminal e faça os seguintes comandos:

:heavy_check_mark: Clonar o projeto
```git clone https://github.com/tatmorenno/beacademy-devstart-jade.git```

:heavy_check_mark: Acessar a pasta do projeto
```cd beacademy-devstart-jade```

:heavy_check_mark: Instalar o composer
```composer install```

:heavy_check_mark: Atualizar o composer
```composer update```

:heavy_check_mark: Abra um editor de texto e renomeie o arquivo ```.env.example``` para ```.env```e configue o arquivo ```.env``` caso necessário com suas credenciais de acesso ao banco de dados

:heavy_check_mark: No terminal digite ```php artisan serve```para rodar o projeto

:heavy_check_mark: Abra o projeto no navegador no caminho especificado no terminal

:heavy_check_mark: Gere uma key
```php artisan key:generate```ou então no navegador clique em *generate key* e *refresh*

:heavy_check_mark: Iniciar projeto
```php artisan serve```

# Squad 👩🏻‍💻🧑🏻‍💻👨🏻‍💻👨🏻‍💻🧑🏻‍💻

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/tatmorenno">
           <kbd>
            <img src="https://github.com/tatmorenno.png" width="200px;" alt="Tatiana Moreno"/>
          </kbd>
        <br>
        <sub>
            <kbd>
          <b>Tatiana Moreno</b>
            </kbd>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/ThiagoGalhardo">
        <kbd>
            <img src="https://github.com/thiagogalhardo.png" width="200px;" alt="Thiago Galhardo"/>
        </kbd>
        <br>
        <sub>
            <kbd>
             <b>Thiago Galhardo</br>
            </kbd>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/fabinho-oc">
        <kbd>
            <img src="https://github.com/fabinho-oc.png" width="200px;" alt="Fabio Costa"/>
        </kbd>
        <br>
        <sub>
         <kbd>
            <b>Fabio Costa</b>
          </kbd>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/MBCapello">
        <kbd>
            <img src="https://github.com/MBCapello.png" width="200px;" alt="Marcelo Capello"/>
        </kbd>
        <br>
        <sub>
            <kbd>
                <b>Marcelo Capello</b>
             </kbd>
        </sub>
      </a>
    </td>
        <td align="center">
      <a href="https://github.com/djaircode">
        <kbd>
            <img src="https://github.com/djaircode.png" width="200px;" alt="Djair Web"/>
        </kbd>
        <br>
        <sub>
         <kbd>
          <b>Djair</b>
         </kbd>
        </sub>
      </a>
    </td>
  </tr>
</table>
<br><br>
<p align="center">Feito com 🤩 por nós!</p>

