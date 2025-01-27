# Regras de Verificação e Análise de Resuisitos

## Nomenclatura dos Requisitos

## Requisitos Funcionais (RF):
Devem ser identificados com o prefixo "REQ-F" seguido por um número sequencial.

- Exemplo: REQ-F01, REQ-F02, REQ-F03, etc.

## Requisitos Não Funcionais (RNF):

Devem ser identificados com o prefixo "REQ-NF" seguido por um número sequencial.

- Exemplo: REQ-NF01, REQ-NF02, REQ-NF03, etc.

## Regras para o Documento de Requisitos
    
### Regra 1: Objetividade e Especificidade:


Cada requisito deve ser objetivo e específico, evitando descrições vagas ou subjetivas. As declarações devem ser quantificáveis ou qualificáveis de forma a eliminar interpretações múltiplas.

A seguir algum dos tópicos a serem evitados:

- Vago: Termos como "confiável", "bom", "suficiente" não oferecem uma medida clara e podem ser interpretados de diferentes maneiras.
- Subjetivo: Palavras como "importante", "adequado", "interessante" são baseadas em opiniões pessoais e não em critérios mensuráveis.
- Ambíguo: Expressões como "frequentemente", "geralmente" ou "normalmente" não definem uma frequência específica, o que pode levar a confusões.
- Qualificadores indefinidos: Termos como "algum", "muitos", "poucos", pois não especificam uma quantidade ou qualidade exata.
        
- Exemplo:

        Em vez de: "O sistema deve ser confiável."
        
        Use: "REQ-F01: O sistema deve garantir uma disponibilidade de 99.9% durante o horário comercial."
        
### Regra 2: Testabilidade:



Os requisitos devem ser escritos de forma a serem testáveis, permitindo que possam ser validados através de testes específicos ou revisões técnicas. Cada requisito deve conter critérios que possam ser medidos ou observados. Assim, os requisitos seguiram uma abordagem do princípio SMART.

- `S` (Específico): O requisito deve ser claro e preciso.
- `M` (Mensurável): Deve haver critérios que permitam medir se o requisito foi atendido.
- `A` (Atingível): O requisito deve ser realista e alcançável dentro do contexto do projeto.
- `R` (Relevante): Deve estar alinhado com os objetivos do projeto e as necessidades dos usuários.
- `T` (Temporal): Deve haver um prazo definido para a sua implementação.

- Exemplo:
        
        Em vez de: "O sistema deve ser intuitivo."
        
        Use: "REQ-NF01: O sistema deve permitir que um novo usuário complete a primeira transação em até 3 minutos, sem a necessidade de assistência."
        

### Regra 3: Coerência e Hierarquização:

Os requisitos devem ser coerentes entre si e organizados em uma hierarquia lógica, facilitando a navegação e entendimento do documento. Cada requisito deve indicar sua relação com outros requisitos, se aplicável, e ser agrupado por categoria ou funcionalidade.
        
- Exemplo:
        
        Estruturar os requisitos relacionados à segurança juntos e indicar como eles se relacionam com requisitos de desempenho ou usabilidade.