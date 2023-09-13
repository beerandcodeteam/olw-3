<p align="center"><a href="https://openlaravelweek.com.br/p1-v1/" target="_blank"><img src="https://openlaravelweek.com.br/wp-content/uploads/elementor/thumbs/logo-full-qbjas20thlvqxd4b5tu7mwy5bx76yerw76w8jjcxkk.png" width="650"></a></p>

# Instalando o projeto

O projeto se utiliza de contêineres Docker, através do pacote *Laravel Sail* para facilitar a configuração do ambiente de desenvolvimento. Portanto, é necessário que já possua o Docker e o Docker Compose instalados na máquina.

Você é livre para rodar o projeto em ambiente local mas esse texto não tratará essa situação.

Links para instalação e configuração de Docker:

- [Windows](https://docs.docker.com/docker-for-windows/install/)
- [Linux (Debian based)](https://docs.docker.com/engine/install/ubuntu/)

### Passos para o rodar o projeto localmente:

- Faça um clone do projeto para sua máquina local
- Crie um arquivo `.env`, recomendamos usar `.env-example` como base
- Adicione ou altere as chaves conforme sua necessidade
- acesse a pasta do projeto via console (terminal/PowerShell/CMD)
- execute o comando:
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
 ```
- Após finalizado processamento, execute o comando `./sail up -d`

O primeiro comando realiza a instalação dos pacotes via composer especificados no arquivo `composer.json` e uma vez que a instalação termina, a pasta *vendor* passa a ficar disponível no projeto. O comando seguinte levanta os contêineres baseado na descrição de serviços feita no arquivo `docker-compose.yml`.

Por padrão, não é necessária nenhuma configuração no arquivo *.env* do projeto. Caso seja necessária alguma edição na configuração padrão (relacionado a binding ports ou credenciais de banco de dados), basta editar o arquivo *.env*.

### Demais duvidas assista nosso vídeo de primeiros passos

<a href="https://www.youtube.com/watch?v=dY2gsUe_6Ow" target="_blank">
 <img src="https://img.youtube.com/vi/dY2gsUe_6Ow/maxresdefault.jpg" alt="Watch the video" width="650" />
</a>


### Modelagem do Banco de dados do projeto

<a href="https://lh3.googleusercontent.com/drive-viewer/AITFw-xAjtWvolMoIq55gNm4bthuJug69GIyLFOupZbwO9urEdSvf2RLBZ5-ShK4wF8hwFsqw2UwtMhl4jufZoHaBimQd-Ho=s1600?source=screenshot.guru"> <img src="https://lh3.googleusercontent.com/drive-viewer/AITFw-xAjtWvolMoIq55gNm4bthuJug69GIyLFOupZbwO9urEdSvf2RLBZ5-ShK4wF8hwFsqw2UwtMhl4jufZoHaBimQd-Ho=s1600" /> </a>