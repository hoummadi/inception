mkdir -p /home/hhoummad

chown -R hhoummad:hhoummad /home/hhoummad

echo hhoummad | tee -a /etc/vsftpd.userlist

vsftpd /etc/vsftpd.conf