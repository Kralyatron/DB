cd ..
echo ���������� ��������� ����������, ���������� ��������� 1 ���
git config --global user.name kralyatron
git config --global user.email budin.vadim@mail.ru
echo ������� ������� ���� ����� ������
git add -A
echo ������ ���� ��������� ���������, �� �������� � ����������� ��������� ���� ��������� ���������
git commit -a -m "comething new"
echo ���������� ��� ��������� �� ���������� ����������� � ��������� �������
git pull origin master
echo ���������� �������, ���� ��������� �������� � ��������� �����������
git push origin master
