# Aplicação para classificar faixas de IMC.
## Aplicação desenvolvida para PTI da disciplina Linguagem de Servidor em PHP.

Enunciado:
Considerando seu conhecimento nos aspectos léxicos, sintáticos e semânticos
da linguagem PHP, elabore um programa respondendo aos pontos constantes
das duas questões abaixo:

1) A) Crie um arquivo “calculoimc.php”: 

B) Este arquivo deve conter

a. Uma função (function) para descobrir a faixa do índice de
massa corporal (IMC) de um valor IMC informado.

b. Uma chamada desta função, passando um valor numérico (com
2 casas decimais).

C)Esta função deverá receber um valor (IMC que se deseja classificar).

2) D) A função deverá descobrir (classificar) a que faixa IMC o número
passado pertence:

a. Nesta função deverá ser criado o Array, para os seguintes dados:

|Faixa | Classificação|
|--- |--- |
| Até 18.5 |Magreza |
|De 18.51 a 24.9 |Saudável
|De 25.0 a 29.9 |Sobrepeso
|De 30.0 a 34.9 |Obesidade Grau I
|De 35.0 a 39.9 |Obesidade Grau II
| Acima de 39.9 |Obesidade Grau III |

b. Deverá percorrecor o Array para descobrir a que faixa o número
recebido pela função pertence.

c. Quando a faixa for encontrada deverá ser informado na tela
(comando “echo”) a seguinte informação:

i. “Atenção, seu IMC é n, e você está classificado como zzz”

Onde:
n = valor recebido no parâmento
zzz = classificação encontrada

exemplo:
Se o valor recebido n = 25.30, será mostrado na tela a
mensagem “Atenção, seu IMC é 25.30, e você está classificado
com sobrepeso”.