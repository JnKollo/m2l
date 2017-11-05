Vagrant.configure("2") do |config|

  config.vm.hostname = "docker"

  config.vm.box = "debian/stretch64"

  config.vm.network "forwarded_port", guest: 3307, host: 9210

  config.vm.network "private_network", ip: "192.168.92.10"

  config.vm.synced_folder ".", "/var/www/html/m2l"

  config.vm.provider "virtualbox" do |v|
    v.name = "m2l"
    v.memory = 4096
    v.cpus = 2
    v.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
  end

  config.vm.provision :shell, inline: "apt-get update"
  config.vm.provision :docker
  config.vm.provision :docker_compose, yml: ["/var/www/html/m2l/docker-compose.yml"], run: "always"
end