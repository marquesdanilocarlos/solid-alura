1 - Princípio da responsabilidade única (Single Responsability Principle)
    - Uma classe deve possuir apenas um motivo para mudar.
    - Deve possuir apenas uma responsabilidade.

2 - Princípio do aberto/fechado (Open closed principle)
    - Traz a ideia de que as classes da aplicação devem ser abertas para extensões e fechadas para modificações, ou seja,
    outras classes podem ter acesso ao que aquela classe possui, porém, não podem alterá-las.
    - Alterar uma classe pai pode ser perigoso, já que outras classes dentro da aplicação podem estar 
    utilizando-a. Ao realizar uma alteração nela, impactará todas as outras que estão utilizando ela. Recomendado não
    depender da classe pai como concreta, mas sim de uma abstração.
    - Quando uma classe possui muitas checagens e verificações, nunca vai parar de crescer e isso é um sinal que podem ser
    criadas novas classes que possuem a garantia que não vão quebrar.

3 - Princípio de substituição de Liskov (Liskov Substitution Principle)
    - Deve-se fazer com que as classes filhas respeitem qualquer definição imposta pela classe base.

4 - Princípio da Segregação de Interface (Interface Segregation Principle)
    - Classes não devem ser forçadas a depender de métodos que não usam, só pra atender algum requisito
    - Não se deve fazer com que uma classe concreta implemente uma interface se não faz sentido ela utilizar algum método
    que a interface defina.

5 - Princípio da Inversão de Dependência (Dependency Inversion Principle)
    - Módulos de alto nível não devem depender de módulos de baixo nível. Ambos devem depender da abstração.
    - Abstrações não devem depender de detalhes. Os detalhes devem depender das abstrações.
    - As Classes concretas devem depender de abstrações e não o inverso.