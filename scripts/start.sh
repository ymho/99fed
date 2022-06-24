if [ ! -e ./simplesamlphp-1.19.5.tar.gz ]; then
  wget https://github.com/simplesamlphp/simplesamlphp/releases/download/v1.19.5/simplesamlphp-1.19.5.tar.gz
fi

if [ ! -e  ./idp-1/hospital-1/simplesamlphp ]; then
  tar xzf simplesamlphp-1.19.5.tar.gz -C ./idp-1/hospital-1/
  mv ./idp-1/hospital-1/simplesamlphp-1.19.5 ./idp-1/hospital-1/simplesamlphp
fi

if [ ! -e  ./idp-1/hospital-2/simplesamlphp ]; then
  tar xzf simplesamlphp-1.19.5.tar.gz -C ./idp-1/hospital-2/
  mv ./idp-1/hospital-2/simplesamlphp-1.19.5 ./idp-1/hospital-2/simplesamlphp
fi

docker-compose up -d --build