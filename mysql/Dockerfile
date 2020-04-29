# Base Image
FROM mysql:8.0.19

# Update and Installation
RUN apt-get update && \
  apt-get upgrade -y && \
  apt-get install -y git && \
  rm -rf /var/lib/apt/lists/*

# Change uid and create directory and change permissions
RUN usermod -u 1000 mysql && \
  mkdir -p /var/run/mysqld && \
  chmod -R 777 /var/run/mysqld

# Port
EXPOSE 3306

# Command
CMD ["mysqld"]
