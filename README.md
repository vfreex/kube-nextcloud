# Kube-Nextcloud: Nextcloud tailored for Kubernetes / OpenShift

# WHAT'S THIS?
This is a distribution of [Nextcloud](https://nextcloud.com) that is tailored for running on Kubernetes or OpenShift.

Comparing with the [official Nextcloud container image](https://github.com/nextcloud/docker),

1. Nextcloud files (`/var/www/html`) is not on a volume and is read-only.
2. Upgrade procedure is not run automatically when a container starts.
3. Supporting running as non-root to be compatible with OpenShift environment.

For more information, check out <https://github.com/nextcloud/docker/issues/381>.
