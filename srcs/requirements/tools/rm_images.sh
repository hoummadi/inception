[ "$(docker ps -qa)" ] && docker stop $(docker ps -qa) && docker rm $(docker ps -qa)
[ "$(docker images -q)" ] && docker rmi -f $(docker images -q)
echo "done"