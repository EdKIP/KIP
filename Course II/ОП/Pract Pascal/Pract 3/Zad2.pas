program meow;
uses crt;
var c1,c2:integer;
function numbers(num1,num2:integer):integer;
begin
while (num1 <> num2) do 
  begin
    if (num1 > num2) then num1:=num1-num2
    else num2:=num2-num1;
  end;
numbers:=num1
end;
begin 
  clrscr;
  write('������� ����� �1 => ');Read(c1);
  write('������� ����� �2 => ');Read(c2);
  writeln('���������� ����� �������� => ',numbers(c1,c2));
end.