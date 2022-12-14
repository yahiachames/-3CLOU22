resource "scaleway_instance_ip" "public_ip" {
  project_id = var.project_id
}

resource "scaleway_instance_server" "web" {
  name = "${local.team}-ssh"

  project_id = var.project_id
  type       = "DEV1-L"
  image      = "ubuntu_jammy"

  tags = ["front", "web"]

  ip_id = scaleway_instance_ip.public_ip.id

  #additional_volume_ids = [scaleway_instance_volume.data.id]

  root_volume {
    # The local storage of a DEV1-L instance is 80 GB, subtract 30 GB from the additional l_ssd volume, then the root volume needs to be 50 GB.
    size_in_gb = 50
  }

  security_group_id = scaleway_instance_security_group.sg-www.id
}

