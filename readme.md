# Construir Imagen de PHP 1 vez
  docker build -t lamp -f lamp.dockerfile .

# Desplegar Aplicacion
  docker-compose up

# Detener servicios
  docker-compose down

# Desplegar aplicacion en segundo plano (daemon)
  docker-compose up -d

# Para restaurar volumenes
  docker-compose down -v