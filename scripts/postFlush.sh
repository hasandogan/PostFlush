#   sudo echo "source /var/www/postFlush/scripts/postFlush.sh;" >> ~/.bashrc

readonly postflushDir="/var/www/postFlush"
readonly postflushDockerDir="/var/www/postFlush/docker"



alias gits='git status';
alias postflush="cd ${postflushDir}";
alias postFlush="cd ${postflushDir}";

function postflushup () {

    docker kill $(docker ps -q)
    cd "${postflushDockerDir}";
    sudo docker-compose up --build -d
    postflush
}

function postconsole () {

    cd "${postflushDockerDir}";
    sudo docker exec -it postFlush_webserver bash
    postflush
}