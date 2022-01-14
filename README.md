# DESIGN PATTERNS

## Criacionais

#### Abstract Factory

- O Abstract Factory é um padrão de projeto criacional que permite que você produza famílias de objetos relacionados sem ter que especificar suas classes concretas.

#### Builder

- O padrão de projeto criacional Builder (Construtor) possui a responsabilidade de criar objetos complexos dividindo a criação em partes. No Builder temos uma interface comum para todos os objetos possibilitando a construção de outros objetos através de uma definição dos passos que são necessários para construir determinado objeto.
  
#### Factory Method 

- O Factory Method é um padrão de projeto classificado como Criacional, ele possui a responsabiidade de definir uma interface para criar determinado objeto, porém deixa que as subclasses decidam qual a classe deve ser instanciada. Basicamente ele permite a adiação da criação da instância de uma classe.

#### Prototype

- O Prototype é um padrão de projeto criacional que permite copiar objetos existentes sem fazer seu código ficar dependente de suas classes.

#### Singleton Adapter [click here](./src/creational/singleton/realworld).

- O Singleton que é um padrão classificado como sendo um padrão criacional. Esse padrão possui a responsabilidade de criar apenas uma única instância de um determinado objeto, garantindo dessa maneira que o objeto em si, tenha apenas um ponto de acesso de maneira global.

## Estruturais

#### Adapter [click here](./src/structural/adapter/realworld).

- O Adapter possui a responsabilidade de converter interfaces incompatíveis em interfaces que as classes concretas (cliente) estejam aguardando. Ou seja, basicamente ele faz com que haja um trabalho em conjunto entre as interfaces incompatíveis fazendo com que a integridade seja mantida.

#### Bridge

- O padrão de projeto estrutural Bridge, possui a responsabilidade de desacolplar a abstração da sua implementação de maneira que ambas possam variar independentemente, ou seja, a abstração é capaz de delegar a maioria das chamadas para a implementação (que também pode variar).

#### Composite

- O Composite é um padrão de projeto estrutural que permite que você componha objetos em estruturas de árvores e então trabalhe com essas estruturas como se elas fossem objetos individuais.

#### Decorator

- O Decorator é um padrão de projeto estrutural que permite que você acople novos comportamentos para objetos ao colocá-los dentro de invólucros de objetos que contém os comportamentos.

#### Facade

- O Facade é um padrão de projeto estrutural que fornece uma interface simplificada para uma biblioteca, um framework, ou qualquer conjunto complexo de classes.

#### Flyweight

- O Flyweight é um padrão de projeto estrutural que permite a você colocar mais objetos na quantidade de RAM disponível ao compartilhar partes comuns de estado entre os múltiplos objetos ao invés de manter todos os dados em cada objeto.

#### Proxy

- Uma classe/objeto de Proxy deve possuir a mesma interface que a classe original a qual se refere, permitindo desta maneira que possamos manipular o acesso  ao objeto real sem realizar alterações na classe original, ou seja, toda e qualquer alteração no código do Proxy não afetará a estrutura da classe original, apenas a meneira como a classe/objeto será acessada/manipulada.

# Comportamentais

#### Chain of Responsability

- O padrão de projeto comportamental Chain Of Responsibility (Corrente de Responsabilidaes/Cadeia de Responsabilidades) possui a responsabilidade de manipular a requisição/solicitação em sequência, ou seja em ordem sequencial. Caso o objeto chamado não seja capaz de tratar a requisição, então a requisição será delegada para o próximo objeto definido na corrente. A requisição será delegada até que um determinado objeto possa realizar o devido tratamento.

#### Command

- O padrão de projeto comportamental Command é responsável por encapsular diversas ações para que sejam executadas, ou seja, ele transforma solicitções como objeto, permitindo desta maneira, que clientes possam realizar diversas ações, como por por exemplo, enviar dados para uma fila, armazenas os dados no banco de dados, enviar e-mail, etc.

#### Iterator

- O Iterator é um padrão de projeto comportamental que permite a você percorrer elementos de uma coleção sem expor as representações dele (lista, pilha, árvore, etc.)

#### Mediator

- O Mediator é um padrão de projeto comportamental que permite que você reduza as dependências caóticas entre objetos. O padrão restringe comunicações diretas entre objetos e os força a colaborar apenas através do objeto mediador.
  
#### Memento

- O Memento é um padrão de projeto comportamental que permite que você salve e restaure o estado anterior de um objeto sem revelar os detalhes de sua implementação.

#### Observer

- O Observer é um padrão de projeto comportamental que permite que você defina um mecanismo de assinatura para notificar múltiplos objetos sobre quaisquer eventos que aconteçam com o objeto que eles estão observando.

#### State

- O State é um padrão de projeto comportamental que permite que um objeto altere seu comportamento quando seu estado interno muda. Parece como se o objeto mudasse de classe.

#### Strategy

- O Strategy é um padrão de projeto comportamental que permite que você defina uma família de algoritmos, coloque-os em classes separadas, e faça os objetos deles intercambiáveis.

#### Template Method

- O Template Method possui a responsabiidade de definir uma estrutura base de um algoritmo, permitindo que determinadas etapas ou passos sejam definidos por subclasse(s) ou classe(s) concreta(s) sem que haja alteração na estrutura principal do algoritmo.
  
#### Visitor

-  Visitor é um padrão de projeto comportamental que permite que você separe algoritmos dos objetos nos quais eles operam.
