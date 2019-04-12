# Kube-Nextcloud: Nextcloud tailored for Kubernetes / OpenShift

## Current version
Nextcloud 15.0.7
PHP 7.2

## WHAT'S THIS?
This is a distribution of [Nextcloud](https://nextcloud.com) that is tailored for running on Kubernetes or OpenShift.

Comparing with the [official Nextcloud container image](https://github.com/nextcloud/docker):

1. Nextcloud root (`/var/www/html`) is shipped with image, which is read-only and not on a volume.
2. Background jobs are scheduled by Kubernetes CronJobs rather than the native crond daemon.
3. Upgrade procedure is not run automatically when a container starts, which significantly boosts the startup speed.
4. It doesn't require the root permission.
5. It is compatible with OpenShift by supporting for running as any UID.
6. Filelocking is disabled.
7. Doesn't suffer from [I/O speed loss after interrupted large file downloads](https://github.com/nextcloud/server/issues/15055). 

For more information, check out <https://github.com/nextcloud/docker/issues/381>.

## Play with docker-compose

This repo contains a simple `docker-compose.yaml` which allows you to run Nextcloud with PostgreSQL on a single machine.Just change the default user name and password of PostgreSQL database, then run

```
docker-compose up -d
```
Your Nextcloud server will be available at <http://localhost:8080>.

## Deploy to Kubernetes/OpenShift

1. Download [manifests files](./deploy/kubernetes/examples).
2. Change the default database password in

```
db-postgresql/nextcloud-db-secret.yaml
kube-nextcloud/nextcloud-secret.yaml
```

2. Configure the way to expose your Nextcloud service.

- If your Kubernetes cluster expose HTTP service with ingress-nginx,
replace `cloud.example.com` in `kube-nextcloud/nextcloud-ing.yaml` with your desired domain name.

- If your Kubernetes cluster supports load balancer, change `type: ClusterIP` in `kube-nextcloud/nextcloud-svc.yaml`  to `type: LoadBalancer`.

3. Deploy with:

```bash
# deploy Nextcloud
kubectl -f kube-nextcloud/
# deploy PostgreSQL database
kubectl -f db-postgresql/
```

