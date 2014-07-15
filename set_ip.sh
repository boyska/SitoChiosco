#!/bin/zsh

sudo service network-manager stop
sudo ip link set dev eth0 down
sudo ip link set dev eth0 up
sudo ip addr add 1.3.1.2/24 dev eth0
