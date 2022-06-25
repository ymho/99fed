if [ ! -e ./simplesamlphp-1.19.5.tar.gz ]; then
  wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v1.19.5/simplesamlphp-1.19.5.tar.gz
fi

docker-compose up -d --build