#!/bin/zsh


########################################################
#                                                      #
#  Author: Blallo <problemi DOT ma AT anche DOT no>    #
#  Assuming: Debian, zsh, calibre (Proprietà Pirata)   #
#                                                      #
########################################################

ETH0=$1
ADDR=$2
SUBNET=$3
SITE_SERVER_PORT=$4
CALIBRE_SERVER_PORT=$5

echo $CALIBRE_SERVER_PORT

sudo service network-manager stop
sudo service apache2 stop
sudo service dnsmasq start

sudo iptables -t nat -F #Cleaning iptables
sudo iptables -t nat -A PREROUTING -p tcp --dport 80 -i $ETH0 -j DNAT --to $ADDR:$SITE_SERVER_PORT
sudo iptables -t nat -A PREROUTING -p tcp --dport $CALIBRE_SERVER_PORT -i $ETH0 -j DNAT --to $ADDR:$CALIBRE_SERVER_PORT

calibre-server -p $CALIBRE_SERVER_PORT &
python2 ./server.py $SITE_SERVER_PORT &
