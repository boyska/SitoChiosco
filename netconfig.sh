#!/bin/bash


########################################################
#                                                      #
#  Author: Blallo <problemi DOT ma AT anche DOT no>    #
#  Assuming: Arch Linux with systemd and ip installed  #
#                                                      #
########################################################

ETH0=$1
ADDR=$2
SUBNET=$3
SERVER_PORT=$4

sudo systemctl stop NetworkManager.service
sudo service NetworkManager stop

sudo ip link set dev $ETH0 up
sudo ip addr add $ADDR/$SUBNET dev $ETH0
sudo ip route add default via $ADDR

sudo iptables -t nat -A PREROUTING -p tcp --dport $SERVER_PORT -i $ETH0 -j DNAT --to $ADDR

python2 ./server.py $SERVER_PORT
