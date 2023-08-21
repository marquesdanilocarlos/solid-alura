1 - Princípio da responsabilidade única (Single Responsability Principle)
    - Uma classe deve possuir apenas um motivo para mudar
    - Deve possuir apenas uma responsabilidade

2 - Princípio do aberto/fechado (Open closed principle)
    - Traz a ideia de que as classes da aplicação devem ser abertas para extensões e fechadas para modificações, ou seja,
    outras classes podem ter acesso ao que aquela classe possui, porém, não podem alterá-las.
    - Alterar uma classe pai pode ser perigoso, já que outras classes dentro da aplicação podem estar 
    utilizando-a. Ao realizar uma alteração nela, impactará todas as outras que estão utilizando ela. Recomendado não
    depender da classe pai como concreta, mas sim de uma abstração
    - Quando uma classe possui muitas checagens e verificações, nunca vai parar de crescer e isso é um sinal que podem ser
    criadas novas classes que possuem a garantia que não vão quebrar.

3 - Princípio de substituição de Liskov (Liskov Substitution Principle)
    - Deve-se fazer com que as classes filhas respeitem qualquer definição imposta pela classe base.