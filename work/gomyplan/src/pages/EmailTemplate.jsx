import styled from "styled-components";

// component
import EmailHeader from "../components/EmailHeader";
import EmailFooter from "../components/EmailFooter";
import BigButton from "../components/BigButton";

// style
const EmailPage = styled.div`
  padding: 50px 40px 60px;
  display: flex;
  flex-direction: column;
  gap: 48px;

  @media only screen and (max-width: 600px) {
    padding: 30px 20px 60px;
    gap: 28px;
  }
`;

const EmailTitle = styled.h1`
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 40px;
  line-height: 100%;
  text-align: center;
  color: var(--color-default);

  @media only screen and (max-width: 600px) {
    font-size: 24px;
  }
`;

const EmailCont = styled.div`
  display: flex;
  flex-direction: column;
  gap: 24px;
  min-height: 300px;

  @media only screen and (max-width: 600px) {
    gap: 16px;
    min-height: 250px;
  }
`;

const EmailContTxt = styled.p`
  font-weight: 400;
  font-size: 18px;
  line-height: 150%;
  text-align: justify;
  color: var(--color-darkgray);

  @media only screen and (max-width: 600px) {
    font-size: 14px;
  }
`;

const EmailList = styled.ul`
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  flex-direction: column;
  gap: 8px;
  padding: 20px 24px;
  border-radius: 8px;
  margin-bottom: 10px;

  @media only screen and (max-width: 600px) {
    gap: 6px;
    padding: 20px;
  }
`;

const EmailListItem = styled.li`
  position: relative;
  font-weight: 400;
  font-size: 18px;
  line-height: 130%;
  color: var(--color-darkgray);
  padding-left: 12px;

  &::before {
    content: "";
    background: var(--color-point);
    border-radius: 100px;
    width: 4px;
    aspect-ratio: 1 / 1;
    position: absolute;
    left: 0;
    top: 0.5em;
  }

  @media only screen and (max-width: 600px) {
    font-size: 14px;

    &::before {
      width: 3px;
      top: 0.75em;
    }
  }
`;

const EmailTemplate = () => {
  return (
    <>
      {/* EmailHeader */}
      <EmailHeader />

      {/* contents */}
      <div className="container">
        <EmailPage>
          <EmailTitle>Email Title</EmailTitle>
          <EmailCont>
            <EmailContTxt>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus tincidunt odio
              eget maximus. Nam a risus eget enim interdum congue nec ut lectus. Donec mollis sapien ac vulputate consequat. Pellentesque quis fringilla risus,
              sed facilisis nisi. Duis sodales vel nunc non scelerisque. Fusce ut finibus est, fringilla sollicitudin nisl.
            </EmailContTxt>
            <EmailContTxt>
              Pellentesque eget pretium mauris. Phasellus laoreet varius posuere. Nunc nisi nunc, rhoncus a nisi id, suscipit volutpat justo. Nulla laoreet
              felis a euismod auctor. Nulla vestibulum, nisl sed efficitur ornare, neque mauris bibendum odio, vitae condimentum metus sapien porttitor magna.
              Donec eget dui ultricies, gravida quam non, consequat est. Nulla felis augue, venenatis at dictum eget, porttitor finibus lectus. Suspendisse
              gravida quis erat commodo.
            </EmailContTxt>
            <EmailList>
              <EmailListItem>Lorem ipsum dolor sit amet</EmailListItem>
              <EmailListItem>Consectetur adipiscing elit</EmailListItem>
              <EmailListItem>Consequat pellentesque vestibulum</EmailListItem>
              <EmailListItem>Aliquam nulla phasellus eget</EmailListItem>
            </EmailList>
          </EmailCont>
          <BigButton className="pc_ver">Action Button</BigButton>
        </EmailPage>
      </div>

      {/* EmailFooter */}
      <EmailFooter />
    </>
  );
};

export default EmailTemplate;
