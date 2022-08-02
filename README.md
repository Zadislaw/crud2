# Instalação

Feito utilizando Windows 10, Laravel 8, Composer V. 2.3.5 e a versão 8.0.18 / PHP 8.0.18 do XAMPP . Pode fazer o download [aqui](https://www.apachefriends.org/xampp-files/8.0.18/xampp-windows-x64-8.0.18-0-VS16-installer.exe), ou no [site da Apache](https://www.apachefriends.org/xampp-files/8.0.18/xampp-windows-x64-8.0.18-0-VS16-installer.exe).

## Passo a passo

Baixe o [XAMPP](https://www.apachefriends.org/xampp-files/8.0.18/xampp-windows-x64-8.0.18-0-VS16-installer.exe).

Instale o Xampp.

Abra o terminal e vá para o diretório htdocs do Xampp:

```
cd C:\xampp\htdocs
```

Clone o repositório:

```
git clone https://github.com/Zadislaw/crud2
```

Inicie o MySql no Xampp.

Vá para o diretório crud2:
```
cd crud2
```

Migre o banco de dados rodando o comando:

```
php artisan migrate  
```

Inicie o servidor de desenvolvimento para a aplicação Laravel:

```
 php artisan serve 
```




# Utilização


Provavelmente você poderá utilizar a página [Home](http://127.0.0.1:8000/profile/novo). Ela contém um form para cadastro de um Profile.

## Ler Profiles

Digite:
```
localhost/profile/ver
```


## Criar Profile

Digite:
```
http://localhost/profile/novo
```

## Editar Profiles:

Não esqueça o ID no final.
Digite :
```
http://localhost/profile/editar/{id}
```

## Deletar Profiles:


Digite a função delete com o ID: 
```
http://localhost/profile/excluir/{id}
```

## Cadastrar Reports:

```
http://localhost/report/novo
```

## Ver Reports:

```
http://localhost/report/ver
```

# Considerações

Este projeto foi pensado para ser executado localmente, passou por poucos testes e apresenta inoperabilidade em caso de passagem de parâmetros incorretos, pois não possui tratamento de erros.
