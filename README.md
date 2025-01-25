# Carona Facil

## Sobre

O Carona Fácil é um sistema desenvolvido para facilitar a vida dos alunos da Universidade Federal de Lavras (UFLA), proporcionando uma forma prática e rápida de conseguir caronas. Com este sistema, os estudantes podem encontrar e oferecer caronas de maneira eficiente, minimizando o tempo de espera e promovendo a mobilidade colaborativa dentro da comunidade acadêmica.

## Funcionalidades

O sistema consiste na busca, criação e reserva de caronas. Dessa maneira, o sistema trabalha com 2 usuários principais o passageiro e o motorista.

### Passageiro

O usuário com essa caracteristica poderá buscar as caronas oferecidas de acordo com o local de origem, destino e horário. Assim, caso encontre alguma carona que se enquadre na sua necessidade poderá solicitar a reserva e aguardar a aprovação do motorista.

### Motorista

O usuário motorista poderá oferecer caronas informando seu local de origem destino e horário. Além disso, caso apareça alguma reserva para essa carona ele poderá aceitar ou recusar o paassageiro.

## :computer: Tecnologias Utilizadas

<table border-collapse=collapse>
  <tr>
    <td><img alt="HTML" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/1119b9f84c0290e0f0b38982099a2bd027a48bf1/icons/html5/html5-original.svg" /> 
    <img alt="CSS" height="30" width="40" src="https://raw.githubusercontent.com/devicons/devicon/1119b9f84c0290e0f0b38982099a2bd027a48bf1/icons/css3/css3-original.svg" /> 
    </td>
    <td><a href="https://www.w3schools.com/html/" target="_blank">HTML, CSS </a></td>
    <td>Front-end</td>
  </tr>
  <tr>
    <td align ="center"><img alt="PHP"  height="30" width="40"  src="https://www.php.net//images/logos/new-php-logo.svg" /></td>
    <td><a href="https://www.php.net/docs.php" target="_blank">PHP 8.1.4</a></td>
    <td>Back-end</td>
  </tr>
  <tr>
    <td align ="center"><img alt="MySQL" height="30" width="40" src="https://upload.wikimedia.org/wikipedia/commons/0/0a/MySQL_textlogo.svg" /></td>
    <td><a href="https://www.mysql.com/" target="_blank">Mysql 8.3</a></td>
    <td>Sistema de gerenciamento de banco de dados</td>
  </tr>
    <tr>
    <td align ="center"><img alt="Laravel" height="30" width="40" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" /></td>
    <td><a href="https://laravel.com/docs/10.x/readme" target="_blank">Laravel 10.0 </a></td>
    <td>Framework</td>
  </tr>
    <tr>
    <td align ="center"><img alt="MariaDB" height="30" width="40" src="https://upload.wikimedia.org/wikipedia/commons/1/10/Apache_HTTP_server_logo_%282019-present%29.svg" /></td>
    <td><a href="https://www.apache.org/" target="_blank">Apache</a></td>
    <td>Servidor</td>
  </tr>
</table>

## Estrutura do projeto.

O projeto terá a estrutura definida da seguinte maneira.

- Toda parte do código da aplicação estará armazenda na pasta "CaronaFacil"
- Toda documentação produzida estará organizada no pastas "Documentacao"
  - Na pasta de Padrões adotados contém o arquivo
    - [Regras de Verificacao e Analise de Requisitos](./Documentacao/Padroes%20Adotados/Regras%20de%20Verificacao%20e%20Analise%20de%20Requisitos.md)
  - Na pasta Requisitos contém:
    - Pasta com os diagramas de Caso de Uso
    - Documento de Requisito do sistema a ser desenvolvido.
  - Na pasta de Diagramas contém
    - Diagrama de Classes
    - Diagrama de Pacotes
    - Diagrama de Sequencia
    - Diagramas de Implantação

```bash
  .
  ├─── CaronaFacil
  ├─── README.md
  └─── Documentacao
      ├─── Padroes Adotados
      │   └── Regras de Verificacao e Analise de Requisitos.md
      ├─── Diagramas
      │   ├─── Diagrama de Classes
      │   │   └─── Diagrama de classes UML.pdf
      │   ├─── Diagrama de Pacotes
      │   │   └─── Diagrama de Pacotes.png
      │   ├─── Diagrama de Sequencia
      │   │   └─── Diagrama de Sequencia.pdf
      │   └─── Diagrama de Implantacao
      │       └─── Diagrama de Implantação.pdf
      └─── Requisitos
          ├─── Diagramas de Casos de Uso
          ├─── Documento de Requisitos.doc
          └─── Documento de Requisitos.pdf


```

## :books: Regras de Uso:

- Regras de Commit:
  - Estrutura do Commit​​​​​​​: assunto, corpo e rodapé
    - Assunto: mensagens do commit
    - Corpo (opcional) - usado para fornecer mais detalhes sobre as mudanças feitas no commit
    - Rodapé (opcional) - lugar para referenciar questões relacionadas às alterações do commit

- Regras de Branch 
  - Utilizar a branch develop para realizar alterações no código.
  - Somente realizar merge com a main após realizar os teste


<br>


## :computer: Práticas de codificação adotadas:

- Usar e manter o padrão MVC;
- Identar o código;
- Nomear funções de maneira intuitiva;
- Comentar somente códigos onde a lógica não é trivial;
- Buscar a criação de loops que percoram somente o necessário;
- Utilizar blocos try e catch para o tratamento de exceções.

## :sunglasses: Desenvolvedores

- [Davi Gomides](https://github.com/daviresende123) :wolf:
- [Eduardo Oliveira](https://github.com/eduardoliveirag) :wolf:
- [Willian Brandao](https://github.com/WillianBrandao) :wolf:
