# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure("2") do |config|

  config.vm.box = "ubuntu/trusty64"

   config.vm.network "private_network", ip: "192.168.33.11"
config.vm.provision "shell", path: "./scripts/wp-provisions.sh"

  # config.vm.network "public_network"
end
